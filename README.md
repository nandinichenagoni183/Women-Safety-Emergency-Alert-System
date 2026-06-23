Women Safety & Emergency Alert System
📌 Project Overview

The Women Safety & Emergency Alert System is a web-based application developed to improve women's safety by providing emergency support features such as SOS alerts, incident reporting, emergency contact management, incident location mapping, and nearby police station detection.

🚀 Features
User Registration & Login
Emergency Contact Management
Incident Reporting
Incident Location Mapping
SOS Alert System
Nearby Police Station Locator
Dashboard with Statistics
MySQL Database Integration
🛠️ Technologies Used
HTML5
CSS3
JavaScript
PHP
MySQL
XAMPP
phpMyAdmin
Leaflet.js
OpenStreetMap API
Overpass API
📂 Project Structure
WomenSafetySystem/
│
├── index.html
├── signup.html
├── login.php
├── register.php
├── dashboard.php
│
├── contacts.php
├── report_incident.php
├── save_incident.php
├── view_incidents.php
│
├── sos_alert.php
├── police_map.php
│
├── db.php
├── women_safety.sql
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
├── images/
│
└── README.md
⚙️ System Workflow
User Registration
        ↓
User Login
        ↓
Dashboard
        ↓
 ┌─────────────────────────────┐
 │ Emergency Contacts          │
 │ Report Incident             │
 │ Incident Map                │
 │ SOS Alert                   │
 │ Nearby Police Locator       │
 └─────────────────────────────┘
🗄️ Database Tables
users
Column
id
name
email
phone
password
contacts
Column
id
contact_name
phone
incidents
Column
id
incident_type
description
latitude
longitude
sos_alerts
Column
id
latitude
longitude
alert_time
🔄 Module Workflow
User Registration
User enters details
Data stored in users table
User Login
Credentials verified
Redirects to dashboard
Emergency Contacts
Add emergency contacts
Stored in contacts table
Incident Reporting
User reports incident
Location captured
Stored in incidents table
Incident Map
Displays incident locations on map
Uses Leaflet.js and OpenStreetMap
SOS Alert
Sends emergency alert with location
Stored in sos_alerts table
Nearby Police Locator
Detects user location
Finds nearby police stations
Displays markers on map
▶️ How to Run
Step 1

Start XAMPP:

Apache → Start
MySQL → Start
Step 2

Move project folder to:

C:\xampp\htdocs\WomenSafetySystem
Step 3

Import database:

women_safety.sql

into phpMyAdmin.

Step 4

Open:

http://localhost/WomenSafetySystem/signup.html

or

http://localhost/WomenSafetySystem/index.html

🎯 Future Enhancements
SMS Alert Integration
Email Notifications
Live GPS Tracking
Mobile Application
AI-based Risk Prediction
Real-time Emergency Monitoring
