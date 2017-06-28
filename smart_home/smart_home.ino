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

void setup(){
  Serial.begin(38400);
  ambilchar.reserve(8);
  pinMode(r1, OUTPUT);
  pinMode(r2, OUTPUT);
  pinMode(r3, OUTPUT);
  pinMode(r4, OUTPUT);
  pinMode(r5, OUTPUT);
  pinMode(r6, OUTPUT);
  pinMode(r7, OUTPUT);
  pinMode(r8, OUTPUT);
}

void loop(){
  while (Serial.available()){
   ambilchar = Serial.readString();
   ambilchar.toCharArray(baper,8);
  }
  
  kontrolRelay();
  //Serial.println(ambilchar);
  Serial.print("50");
  Serial.print(",");
  Serial.println("10");
  delay(1000);
  
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
