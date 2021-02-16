<!DOCTYPE html>

<head>
  <title>Adding to Database</title>
  <link rel="stylesheet" href="stylesheet.css">
  <script src="scripts.js"></script>
</head>


<body>
  <h1>AT Plumbing & Services</h1>
  <h2>1. Fill the Service Details</h2>

  <form name="form" action="insert.php" method="POST" enctype="multipart/form-data">


    <!--client details-->
    Client Name:
    <br>
    <input type="text" name="client_name" size="50" placeholder="Enter Client Name if known">
    <br><br>

    Client Email:
    <br>
    <input type="email" name="client_email" size="50" placeholder="Enter Client Email if known">
    <br><br>

    Client Contact:
    <br>
    <input type="tel" name="client_contact" size="50" placeholder="Enter Client Contact if known" pattern="[0-9]{10}">
    <br><br>
    title


    <!--address-->
    Service Address:
    <br>
    <input type="text" name="service_address" size="50" placeholder="Enter the site address (Required)" Required>
    <br /><br>


    <!--agent details-->
    Agent Name:
    <br>
    <input type="text" name="agent_name" size="50" placeholder="Enter Agent Name (Required)" Required>
    <br><br>

    Agent Email:
    <br>
    <input type="email" name="agent_email" size="50" placeholder="Enter Agent Email if known">
    <br><br>

    Agent Contact:
    <br>
    <input type="tel" name="agent_contact" size="50" placeholder="Enter Agent Contact if known" pattern="[0-9]{10}">
    <br><br><br>


    <!--date and time-->
    Date of Service:
    <br>
    <input type="date" name="date" Required>
    <br><br><br>

    Time of Service:
    <br>
    From <input type="time" name="start_time" Required>
    To <input type="time" name="end_time" Required>
    <br><br><br>


    <!--Residency Type-->
    Residency Type:
    <br>
    <select name="residency_type">
      <option> House </option>
      <option> Townhouse </option>
      <option> Apartment </option>
      <option> Unit </option>
      <option> Commercial </option>
      <option> Other </option>
    </select>
    <br><br>

    No. of Bedrooms:
    <br>
    <select name="no_of_bedrooms">
      <option> 1 </option>
      <option> 2 </option>
      <option> 3 </option>
      <option> 4 </option>
      <option> 5 </option>
      <option> 5+ </option>
    </select>
    <br><br><br>



    <h2>2. Fill the Appliance Details</h2>

    Select the room regarding the appliance:
    <br>
    <select name="rooms">
      <option> Other </option>
      <option> Bedroom </option>
      <option> Hallway </option>
      <option> Kitchen </option>
      <option> Corridor </option>
      <option> Dining Room </option>
      <option> Living Room </option>
      <option> Bingalow </option>
      <option> Entrance </option>
      <option> Basement </option>
      <option> Garage </option>
      <option> Front Porch </option>
      <option> Balcony </option>
      <option> Carport </option>
      <option> Bathroom </option>
      <option> Ensuite </option>
      <option> Toilet </option>
      <option> Laundry </option>
      <option> Side of House </option>
      <option> Courtyard </option>
      <option> Shed </option>
      <option> Store </option>
      <option> Office </option>
    </select>
    <br><br>

    Select the house level regarding the appliance:
    <br>
    <select name="level">
      <option> Ground </option>
      <option> Level 1 </option>
      <option> Level 2 </option>
      <option> Level 3 </option>
      <option> Level 4 </option>
      <option> Level 5 </option>
      <option> Level 6 </option>
      <option> Level B </option>
      <option> Level B2 </option>
    </select>
    <br><br>

    Select the Appliance:
    <br>
    <select name="appliance">
      <option> Service Pressure Testing Gas Line Natural Gas </option>
      <option> Cooktop </option>
      <option> Hot Water Storage Tank (External) </option>
      <option> Ducted Heating Roof </option>
      <option> Free Standing Oven </option>
      <option> Ducted Heating External </option>
      <option> (Power Flue) External Instant Hot Water Service </option>
      <option> Wall Furnance </option>
      <option> Solar Hot Water With Instant Booster </option>
      <option> Space Heater </option>
      <option> Unable to test Appliance </option>
      <option> Hot Water Storage Tank (Internal) </option>
      <option> Space Heater Room Sealed </option>
      <option> Ducted Heating Cupboard </option>
      <option> Previously Decommissioned Appliance </option>
      <option> Ducted Heater Under Floor </option>
      <option> Hydronic Heating </option>
      <option> Wall Oven </option>
      <option> (Natural Draft) External Instant Hot Water Service </option>
      <option> Gas Log Fire Balanced Flue </option>
      <option> Type 2 decorative flame effect fire </option>
      <option> Gas log fire </option>
      <option> (Natural Draft) Internal Instant Hot Water Service </option>
      <option> Gas BBQ </option>
      <option> Elevated Cooker </option>
      <option> Type 1 decorative flame effect fire </option>
      <option> (Power Flue) Internal Instant Hot Water Service </option>
      <option> Hot Water Instantanoeus Room Sealed Internal </option>
      <option> Gas Pool Heater External </option>
      <option> Previously Decommissioned Appliance </option>
      <option> Service Pressure test fitting Line L.P.G </option>
      <option> Gas Log Fire Power Flue </option>
      <option> Appliance Inspection </option>
      <option> Co Test Appliance </option>
      <option> Appliance Service </option>
      <option> Ducted Heater in Garage </option>
      <option> Plumbing Maintenance </option>
      <option> Wall furnance Power Flue </option>
      <option> Wall furnance room sealed </option>
      <option> Gas Line Info </option>
      <option> Gas Pool Heater Internal </option>
      <option> Gas Potbelly </option>
      <option> No Power Unable to service appliances </option>
      <option> Further works pressure test at gas meter </option>
      <option> Replacing a gas line </option>
      <option> Solar Hot Water with Tank Booster </option>
    </select>
    <br><br><br>

    Select the Manufacturer of Appliance:
    <br>
    <select name="manufacturer">
      <option> Other </option>
      <option> Unknown </option>
      <option> Aquamax </option>
      <option> Bonaire </option>
      <option> Bosch </option>
      <option> Braemar </option>
      <option> Brivis </option>
      <option> Cannon </option>
      <option> Chef </option>
      <option> Detector Inspector </option>
      <option> Dux </option>
      <option> Emilia </option>
      <option> Euromaid </option>
      <option> Gas Meter </option>
      <option> Gas Pex </option>
      <option> Highland </option>
      <option> Kaden </option>
      <option> Omega </option>
      <option> Rheem </option>
      <option> Therman </option>
      <option> Viali </option>
      <option> Vulcan </option>
      <option> Westing House </option>
    </select>
    <br><br>


    Enter Model Number of the Appliance:
    <br>
    <input type="text" name="model" size="40" placeholder="Enter the Appliance Model No. if known">
    <br><br><br>


    <h2>3. Checklist</h2>


    <br><br>

    
    <h2>4. Finalise & Upload</h2>

    <!--Upload and Preview image-->
    Insert Photo:
    <input id="image" type="file" name="photo1" onchange="PreviewImage();" accept="image/*">
    <br><br>
    <img id="preview" src="images/preview.png" alt="Preview" style="width: 150px; height: 150px; padding-left: 8ch;">
    <br><br><br>

    <!--Submit and Reset-->
    <input type="submit" name="submit" id="submit" style="padding:5px;" value="Submit Details">
    <input type="reset" name="reset" id="reset" style="padding:5px; margin-left:1ch;" value="Reset All Entries">
  </form>


</body>

</html>


<!--

MODEL
Enter Model NO: [Text Box]


CHECKLIST {For hot water storage tank}
1. General Appliance Photo
  a. Take 1 photo 2 meters away of the appliance showing its surrounding
    [Upload Photo]
  b. Is there any visible pre-existing damage to the appliance? [yes/ no option]
    if yes {photo of damage} if no (move to step 2)

2. Data Plate
  a. Is the data plate accessible?
    if yes [photo]/ if no [reason]
  b. if no [Why cant the data plate be accessed?]
     Options: Data plate has been removed.
              Not easily accessible.
              Worn unreadable.
  c. IF worn unreadable [take a photo of worn data plate.]

3. Support/ Fixing/ Securing of Appliance
  Options: Appliance is secured correctly. [Photo and finish.]
           Appliance is secured incorrectly. [note {What is wrong with current securing of appliance}, photo and finish.]
           Appliance is not required to be secured. [finish.]
           Appliance not secure. [note {How should the appliance be secured}, photo and finish]
           Appliance not level and plumb. [finish.]

4. Water and Gas Connection
  Is there a non return Valve?
  Option: Yes: [Photo]
           No: [Photo]
  Next: Is there a gas isolation valve? Yes/ No [photo]
  Next: Is there any pex connections? Yes
                                      {is the pex compliant? (black pex is UV stable.)}
                                          yes [photo and finish]
                                          no [photo of exposed pex pipe] ==>
                                                                            Can this be rectified with UV stable Duct tape?
                                                                            Options: (300 mm MAX) Yes, I have rectified this problem with duct tape. [photo of rectification finish]
                                                                                     No we will need a return visit. [Finish]
                                      No  [finish]

5. Integrity/ Clearances of Flue System
Does the Flue have correct clearances e.g. 300mm power flue as per fact sheet 26
Yes
NO: Describe the clearance issue (text box) and photo of incorrect flue clearance
    if we moved or relocated this appliance, will it correct the flue clearance?
      yes [what can we do to correct the clerance issue? (text box) and photo and finish]
      no. {finish}


6. P.T.R Drain
Is the PTR drain compliant with Technical Solution Sheet 6.09?
yes/no. [photo and finish]

7. Tempering Valve
Is there a tempering valve?
yes [photo] Any issues found in valve? Yes [Text Notes and finish]
                                       No {finish}
no {finish}

8. Pilot/ Thermocouple/ Burner Storage
ignition system:OPTIONS Flame sensor/igniter , pilot/thermocouple, hot surface ignitor
Any isssues with ignition system? yes [notes, photo finish]
                                  no [finish]

9. Gas Valves storage hot water
Photo of gas valve, inlet pressure, adjusted burner pressure, soapy water test {4 seperate pics}
Issues in gas valve: Yes {is the gas valve faulty and needs to be replaced?}
                          [You have indicated that gas valve needs replacement please check if its is low pressure issue from gas meter.]
                            - Faulty gas control [photo of Burner Aeration [finish]]
                            - Internal leak on the gas valve [will you be capping the water service off? Yes/ No ==> photo of Burner Aeration [finish]]
                     No: photo of Burner Aeration [finish]

10. Gas/ Electrical Safety
Are there any safety concerns with gas and electricity?
Yes: Is the situation life threatening?
  Yes: Contact Service Work Manager immediately. {notes photo finish}
No: Finish


11. Appliance Condition
Good and safe {finish}
General Wear and Tear/ Working Condition [finish]
Worn condition due to age (safe and operational) [finish]
UNSAFE requires disconnection and rectification [disconnect immediately and is there asbestos flue to be removed? Yes/no finish]
Poor Condition requires Replacement (Not disconnected) [is there asbestos flue to be removed? Yes/no finish]
Poor Condition requires Replacement (Disconnected) [Whats wrong? (text box) and is there asbestos flue to be removed? Yes/no finish]
Requires part but functional [finish]
Requires part (Appliance not operational) [Does the appliance needs to be disconnected until parts are replaced? yes - disconnect / finish
                                                                                                                 no - finish
Safety protocol that needs disconnection and replacement [Disconnect / is there asbestos flue to be removed? Yes/no finish]
Appliance not operational [Was this appliance not operating before your attendance?] yes - finish
                                                                                     no - do we need a diagonistic to attend to fix? yes/no finish.


12. Appliance Operation
Is the appliance working?
  Yes [finish]
  Appliance capped off [Mark the capped off and filled out disconnection workflow]
  NO: Appliance not operational, need diagonistic
  NO: requires part
  NO: was previously disconeeted
  NO: other reason [text box for reason]


13. Appliance Base
Do the appliance needs a base? (Select No, if sitting on a concrete or wall-mounted)
Yes- Does it have a solid base? (yes/no) - Is the appliance level? yes/no - photo
No- Is the appliance level? yes/no - photo

14. Safety on completion
  Photo - wide as possible
  Any further work required? yes - notes
                             no - ==>
  Any further notes? yes- notes
                     no - ==>
  Any accidenatal damage caused by you? yes - photo and explanation (text box)
                                        no - finish



COMMON IN ALL
plate
photo
safety on completion
General Notes [Text Box]

add appliance (option)

select room
other, bedroom, hallway, kitchen, corridor, dining room, living room, bungalow, entrance, basement,
garage, front porch, balcony, carport, bathroom, ensuite, toilet, laundry, side of house, courtyard, shed,
store, office

level: ground, lvl 1 lvl 2 3456 lvl B level B2

APPLIANCE

Service Pressure Testing Gas Line Natural Gas
Cooktop
Hot Water Storage Tank (External)
Ducted Heating Roof
Free Standing Oven
Ducted Heating External
(Power Flue) External Instant Hot Water Service
Wall Furnance
Solar Hot Water With Instant Booster
Space Heater
Unable to test Appliance
Hot Water Storage Tank (Internal)
Space Heater Room Sealed
Ducted Heating Cupboard
Previously Decommissioned Appliance
Ducted Heater Under Floor
Hydronic Heating
Wall Oven
(Natural Draft) External Instant Hot Water Service
Gas Log Fire Balanced Flue
Type 2 decorative flame effect fire
Gas log fire
(Natural Draft) Internal Instant Hot Water Service
Gas BBQ
Elevated Cooker
Type 1 decorative flame effect fire
(Power Flue) Internal Instant Hot Water Service
Hot Water Instantanoeus Room Sealed Internal
Gas Pool Heater External
Previously Decommissioned Appliance
Service Pressure test fitting Line L.P.G
Gas Log Fire Power Flue
Appliance Inspection
Co Test Appliance
Appliance Service
Ducted Heater in Garage
Plumbing Maintenance
Wall furnance Power Flue
Wall furnance room sealed
Gas Line Info
Gas Pool Heater Internal
Gas Potbelly
No Power Unable to service appliances
Further works pressure test at gas meter
Replacing a gas line
Solar Hot Water with Tank Booster



MANUFACTURER
Other
Unknown
Aquamax
Bonaire
Bosch
Braemar
Brivis
Cannon
Chef
Detector Inspector
Dux
Emilia
Euromaid
Gas Meter
Gas Pex
Highland
Kaden
Omega
Rheem
Therman
Viali
Vulcan
Westing House

-->