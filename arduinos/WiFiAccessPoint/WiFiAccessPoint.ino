#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <FS.h>
#include "index.h"
const char *ssid = "HELLO";
const char *password = "19992055";
ESP8266WebServer server(80);
String url="";
String s = M_1;
 void handleRoot() {
 url="<a href=\"a\"><button><div class=\"row\"><h1>turn on</h1></div></button></a></body></html>";
 digitalWrite(3,0);         /////setted light off
 server.send(200, "text/html", s+url);
  Serial.println(s+url+"\nok");
  url="";
}

  void handleWebRequests(){
    ///no chaing in light
  server.send(404, "text/plain", "invalid option::404");
  Serial.println("error:::"+server.uri());
}

void turnon(){
  ////changed the url to next option
  url="<a href=\"b\"><button><div class=\"row\"><h1>turn off</h1></div></button></a></body></html>";
  digitalWrite(3,1);
    server.send(200, "text/html", s+url);
    Serial.println(s+url+"\nok");
    url="";
  }
void turnoff(){
  url="<a href=\"a\"><button><div class=\"row\"><h1>turn on</h1></div></button></a></body></html>";
  digitalWrite(3,0);  
  server.send(200, "text/html", s+url);
  Serial.println(s+url+"\nok");
  url="";
  }



void setup() {
	Serial.begin(9600);
  pinMode(3,OUTPUT);
  SPIFFS.begin();
	Serial.print("Configuring access point...");
	WiFi.softAP(ssid, password);
	IPAddress myIP = WiFi.softAPIP();
	Serial.print("AP IP address(goto this url): ");
	Serial.println(myIP);
	server.on("/", handleRoot);
  server.on("/b",turnoff);
  server.on("/a",turnon);
  server.onNotFound(handleWebRequests); //Set setver all paths are not found so we can handle as per URI
	server.begin();
	Serial.println("HTTP server started");
  Serial.println("connect to HELLO password=19992055 \n then goto browser..\nthen enter above shown ip address as url..");
}

void loop() {
	server.handleClient();

}
