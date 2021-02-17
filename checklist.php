<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adding to Database</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="scripts.js"></script>
</head>


<body>
    <h1>AT Plumbing & Services</h1>

    <span style="font-size:20px;cursor:pointer;float:right;position:fixed;right:2.2%;" onclick="openNav()">
        Checklist Item's Navigation &#9776;</span>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#A"> A. General Appliance Photo</a>
        <a href="#B"> B. Data Plate</a>
        <a href="#C"> C. Support/ Fixing/ Securing of Appliance</a>
        <a href="#D"> D. Water and Gas Connection</a>
        <a href="#E"> E. Integrity/ Clearances of Flue System</a>
        <a href="#F"> F. P.T.R Drain</a>
        <a href="#G"> G. Tempering Valve</a>
        <a href="#H"> H. Pilot/ Thermocouple/ Burner Storage</a>
        <a href="#I"> I. Gas Valves storage hot water</a>
        <a href="#J"> J. Gas/ Electrical Safety</a>
        <a href="#K"> K. Appliance Condition</a>
        <a href="#L"> L. Appliance Operation</a>
        <a href="#M"> M. Appliance Base</a>
        <a href="#N"> N. Safety on Completion</a>
    </div>
    <br><br>


    <h2>3. Checklist</h2>


    <form name="form" action="insert.php" method="POST" enctype="multipart/form-data">

        <div id="A">
        <br>
            <h3>A. General Appliance Photo</h3>
            I. Take one photo 2 meters away of the appliance showing its surrounding:<br><br>
            <input id="image" type="file" name="photo1" onchange="PreviewImage();" accept="image/*">
            <br><br>
            <img id="preview" src="images/preview.png" alt="Preview" style="width: 100px; height: 100px; padding-left: 8ch;">
            <br><br><br>

            II. Is there any visible pre-existing damage to the appliance?
            <br>
            <input type="radio" name="yn1">Yes<br>
            <input type="radio" name="yn1">No
            <br><br>

            III. If Yes, take a photo of {photo of damage} if no (move to step 2)
        </div>
        <br><br><br><br>


        <div id="B">
        <br>
            <h3>B. Data Plate</h3>
        </div>
        <br><br><br><br>


        <div id="C">
        <br>
            <h3>C. Support/ Fixing/ Securing of Appliance</h3>
        </div>
        <br><br><br><br>


        <div id="D">
        <br>
            <h3>D. Water and Gas Connection</h3>
        </div>
        <br><br><br><br>


        <div id="E">
        <br>
            <h3>E. Integrity/ Clearances of Flue System</h3>
        </div>
        <br><br><br><br>


        <div id="F">
        <br>
            <h3>F. P.T.R Drain</h3>
        </div>
        <br><br><br><br>


        <div id="G">
        <br>
            <h3>G. Tempering Valve</h3>
        </div>
        <br><br><br><br>


        <div id="H">
        <br>
            <h3>H. Pilot/ Thermocouple/ Burner Storage</h3>
        </div>
        <br><br><br><br>


        <div id="I">
        <br>
            <h3>I. Gas Valves storage hot water</h3>
        </div>
        <br><br><br><br>


        <div id="J">
        <br>
            <h3>J. Gas/ Electrical Safety</h3>
        </div>
        <br><br><br><br>


        <div id="K">
        <br>
            <h3>K. Appliance Condition</h3>
        </div>
        <br><br><br><br>


        <div id="L">
        <br>
            <h3>L. Appliance Operation</h3>
        </div>
        <br><br><br><br>


        <div id="M">
        <br>
            <h3>M. Appliance Base</h3>
        </div>
        <br><br>

        <div id="N">
        <br>
            <h3>N. Safety on Completion</h3>
        </div>
        <br><br><br><br>



        <!--Submit and Reset-->
        <input type="submit" name="submit" id="submit" style="padding:5px;" value="Submit Details" title="This will upload all the details from step 1,2 & 3. Finalize before uploading.">
        <input type="reset" name="reset" id="reset" style="padding:5px; margin-left:1ch;" value="Reset All Entries" title="This will clear all data. Proceed with caution.">
    </form>


</body>

</html>


<!--

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
-->