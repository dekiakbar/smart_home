#include "DHT.h"
#define Spin A0
#define DHTTYPE DHT22
DHT dht(Spin, DHTTYPE);

String ambilchar = "";
char baper[8];
const int r1=2;
const int r2=3;
const int r3=4;
const int r4=5;
const int r5=6;
const int r6=7;
const int r7=8;
const int r8=9;

int S_Hujan=A1;
const int S_Cahaya=A2;
const int S_Air=A3;

void setup(){
  Serial.begin(38400);
  dht.begin();
  ambilchar.reserve(8);
  pinMode(r1, OUTPUT);
  pinMode(r2, OUTPUT);
  pinMode(r3, OUTPUT);
  pinMode(r4, OUTPUT);
  pinMode(r5, OUTPUT);
  pinMode(r6, OUTPUT);
  pinMode(r7, OUTPUT);
  pinMode(r8, OUTPUT);
  pinMode(S_Hujan, INPUT);
  pinMode(S_Cahaya, INPUT);
  pinMode(S_Air, INPUT);
}

void loop(){
  while (Serial.available()){
   ambilchar = Serial.readString();
   ambilchar.toCharArray(baper,8);
  }
  delay(1000);
  kontrolRelay();
  Serial.print(bacaSuhu());
  Serial.print(",");
  Serial.print(bacaKelembaban());
  Serial.print(",");
  Serial.print(bacaHujan());
  Serial.print(",");
  Serial.print(bacaCahaya());
  Serial.print(",");
  Serial.print("pintu");
  Serial.print(",");
  Serial.println(bacaAir());
}

float bacaSuhu(){
  float suhu;
  suhu = dht.readTemperature();
  return suhu;
}

float bacaKelembaban(){
  float kelembaban;
  kelembaban = dht.readHumidity();
  return kelembaban;
}

String bacaHujan(){
  int NS_Hujan;
  String statHujan="";
  NS_Hujan = analogRead(S_Hujan);
  
  if (NS_Hujan >= 990 ){
    statHujan = "Tidak Hujan";
  }else if (NS_Hujan >= 801 && NS_Hujan <= 989 ){
    statHujan = "Hujan Rintik";
  }else if (NS_Hujan >= 401 && NS_Hujan <= 800 ){
    statHujan = "Hujan";
  }else if (NS_Hujan <= 400){
    statHujan = "Hujan Deras";
  } 
  return statHujan;
}

String bacaCahaya(){
  String statCahaya ="";
  int bacaCahaya;
  bacaCahaya = digitalRead(S_Cahaya);
  
  if (bacaCahaya == LOW){
    statCahaya = "Terang";
  }else if (bacaCahaya == HIGH){
    statCahaya = "Gelap";
  }
  return statCahaya;
}

String bacaAir(){
  String statAir ="";
  int bacaAir;
  bacaAir = analogRead(S_Air);
  
  if (bacaAir <= 70){
    statAir ="Kosong";
  }else if (bacaAir >= 71 && bacaAir <= 399){
    statAir ="Sedikit";
  }else if (bacaAir >= 400 && bacaAir <= 510 ){
    statAir ="Setengah";
  }else if (bacaAir >= 511 && bacaAir <= 600 ){
    statAir ="Penuh";
  }
  return statAir;
}

void kontrolRelay(){
  if (ambilchar[0] == '1'){
  digitalWrite(r1, LOW);
  }else{
  digitalWrite(r1, HIGH);
  }
  
  if (ambilchar[1] == '1'){
  digitalWrite(r2, LOW);
  }else{
  digitalWrite(r2, HIGH);
  }
  
  if (ambilchar[2] == '1'){
  digitalWrite(r3, LOW);
  }else{
  digitalWrite(r3, HIGH);
  }
  
  if (ambilchar[3] == '1'){
  digitalWrite(r4, LOW);
  }else{
  digitalWrite(r4, HIGH);
  }
  
  if (ambilchar[4] == '1'){
  digitalWrite(r5, LOW);
  }else{
  digitalWrite(r5, HIGH);
  }
  
  if (ambilchar[5] == '1'){
  digitalWrite(r6, LOW);
  }else{
  digitalWrite(r6, HIGH);
  }
  
  if (ambilchar[6] == '1'){
  digitalWrite(r7, LOW);
  }else{
  digitalWrite(r7, HIGH);
  }
  
  if (ambilchar[7] == '1'){
  digitalWrite(r8, LOW);
  }else{
  digitalWrite(r8, HIGH);
  }
}
