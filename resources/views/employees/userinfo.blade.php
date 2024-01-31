<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/employee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Employee: User Info</title>
    <style>
        .container{
            margin-top:1em;
            padding:1em;
            background-color:white;
            display:flex;
            flex-direction:column;
            border-radius:5px;
        }
        .field-group{
            margin-top:2em;
            display:flex;
        }
        #container-title{
            font-weight: 400;
            border-bottom:1px solid #dedede;
            color:#323468;
        }
        .input-group{
            padding:.8em;
            width:25%;
            display:flex;
            flex-direction:column;
        }
        .input-group-special{
            padding:.8em;
            width:50%;
            display:flex;
            flex-direction:column;
        }
        .input-group-single{
            padding:.8em;
            width:75%;
            display:flex;
            flex-direction:column;
        }
        .input-group .input-field,.input-group-special .input-field,.input-group-single .input-field{
            border:none; 
            font-size:1rem;
            border-bottom:1px solid #dedede;
        }
        label{
            margin-top:.5em;
            color:#c4c4c4;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="fa-solid fa-user-secret"></i>
                <span>Oikos</span>
            </div>
            <i class="fa-solid fa-bars" id = "btn"></i>
        </div>
        <div class="user">
            <img src ="" alt="secret-user" class = "user-img">
            <div class="">
                <p class = "bold">Kafelnikov Dela Rosa</p>
                <p>(Student)</p>
            </div>
        </div>
        <ul>
            <li>
                <a href = "/employees/Home">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-item">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href = "/employees/user-info">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">User</span>
                </a>
                <span class="tooltip">User Info</span>
            </li>
            <li>
                <a href = "/employees/Announcement">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span class="nav-item">Announcement</span>
                </a>
                <span class="tooltip">Announcement</span>
            </li>

            <li>
                <a href = "/employees/Document-Request">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span class="nav-item" >Document Request</span>
                </a>
                <span class="tooltip" style="white-space:nowrap;">Document Request</span>
            </li>

            <li>
                <a href = "/employees/Calendar">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="nav-item">Calendar</span>
                </a>
                <span class="tooltip">Calendar</span>
            </li>
            <li>
                <a href = "/employees/Time-Record">
                    <i class="fa-solid fa-clock"></i>
                    <span class="nav-item" style="height:50px;">Time Record</span>
                </a>
                <span class="tooltip">Time Record</span>
            </li>
            
            <li>
                <a href = "/employees/logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <h1>User</h1>
        <div class="container">
            <h3 id=container-title>Employee Details</h3>
            <div class="field-group">
                <div class="input-group">
                    <input type="text" class='input-field' id='last-name' value="Lupin" readonly>
                    <label for="last-name">Last Name</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='first-name' value="Copernicus" readonly >
                    <label for="first-name">First Name</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='middle-name' value="Vincent" readonly >
                    <label for="middle-name">Midde Name</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='extension' value="III" readonly >
                    <label for="extension">Extension</label>
                </div>
            </div>
            <div class="field-group">
                <div class="input-group">
                    <input type="date" class='input-field' id='birthdate' value="August-20-2001" readonly >
                    <label for="birthdate">Birthdate</label>
                </div>
                <div class="input-group-special">
                    <input type="text" class='input-field' id='phone-number' value="09154054370" readonly >
                    <label for="phone-number">Phone Number</label>
                </div>
            </div>
            <div class="field-group">
                <div class="input-group-single">
                    <input type="text" class='input-field' id='address' value="1 Riyal Street CBE Town Brgy Pasong Tamo Quezon City" readonly >
                    <label for="address">Address</label>
                </div>
            </div>
            <div class="field-group">
                <div class="input-group">
                    <input type="text" class='input-field' id='city' value="Quezon City" readonly >
                    <label for="city">City</label>
                </div>
                <div class="input-group-special">
                    <input type="text" class='input-field' id='region' value="NCR" readonly >
                    <label for="region">Region</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='postal' value="1101" readonly >
                    <label for="postal">Postal Code</label>
                </div>
            </div>
            <div class="field-group">
                <div class="input-group">
                    <input type="text" class='input-field' id='country' value="Philppines" readonly >
                    <label for="country">Country</label>
                </div>
                <div class="input-group-special">
                    <input type="text" class='input-field' id='nationality' value="Russian" readonly >
                    <label for="nationality">Nationality</label>
                </div>
                <div class="input-group">
                    <input type="text" class='input-field' id='sex' value="Male" readonly >
                    <label for="sex">Sex</label>
                </div>
            </div>
            <div class="field-group">
                <div class="input-group-special">
                    <input type="text" class='input-field' id='email' value="lupinIII@gmail.com" readonly >
                    <label for="email">Email</label>
                </div>
                <div class="input-group-special">
                    <input type="text" class='input-field' id='telephone' value="N/A" readonly >
                    <label for="telephone">Telephone Number</label>
                </div>
            </div>
        </div>
    </div>


    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
    </script>


</body>
</html>