<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- implemented sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: DepEd Form</title>
    <style>
        .section-header {
            
			margin: 20px;
			background-color: #323468;
			border-radius: 5px;
			height: 100px;

			header {
                
                padding-top: 25px;
				margin: 20px;
				display: flex;
				justify-content: space-between;

            }

            header .searchbox {
					display: flex;
					padding: 10px;
					background-color: #ffffff;
                    border: 1px solid #bbc3c9;
					border-radius: 5px;
					width: 25%;

                }
					
            .searchbox .icon {
						color: #bbc3c9;
						margin: 0 5px;
					}

					input.search-text {
                        border: none;
						background-color: inherit;
						font-size: 1em;
						font-weight: 600;
						outline: none;						
					}
				
			
		}
	
.section-header {
    
	header .app-list-options {
		display: flex;
		justify-items: center;
		align-items: center;

        }

        .custom-select {
            display: flex;
            background-color: #ffffff;
			border-radius: 5px;
			padding: 10px;
			color: black;
			font-size: .75em;
			font-weight: 600;
            width: 500%;
            margin-right:5px;
        }



        .custom-select select{
        
        appearance: none;
        -webkit-appearance: none;

        width: 100%;
        border: none;
        font-size: 1rem;
        background-color: #fff;
        color: #000;
        }

        
        .custom-select i{
        font-size:20px;
        }

		.display-group {
			display: flex;
			.icon {
				margin-right:0;
				margin-left: 0;
			}
		}

        .filter{
            
            display:flex;
            padding:10px;
            background-color:#5C5EB3;
            font-size:1em;
			font-weight:600;
            margin-right:20px;
            color:white;
            border:none;
            border-radius: .2em;

        }
	}
        h1 a{
            text-decoration:none;
            color:gray;
            transition:color 150ms ease-in-out;
        }
        h1 a:hover{
            color:black;
        }
        .lists{
            background-color:white;
            padding:1em;
            border-radius:5px;
        }
        .lists .view{
            display:flex;
            justify-content: space-between;
            align-items:center;
            border-bottom:2px solid #c5c5c5;
            margin-top:.5em;
        }
        .view .label-group{
            width:35%;
        } 
        .view .label-group p{
            font-size:1.2rem;
        }
        .view .dropdown i{
            margin-right:.6rem;
            cursor:pointer;
            transform:rotate(0deg);
            transition:transform 150ms ease-in-out;
        }
        .view .dropdown .animate{
            transform:rotate(90deg);
        }
        .lists .detail{
            visibility:hidden;
            position:absolute;
            display:flex;
            justify-content:space-between;
            color:white;
            padding:.5em;
            background-color:#51558f;
        }
        .lists .detail .option p{
            font-size:1.1rem;
        }
        .lists .detail .option-choice{
            display:flex;
            justify-content: space-around;    
        }
        .detail.show{
            visibility: visible;
            position:relative;
        }
    </style>
</head>

					
<body>
    @include('component.admin.sidenav')
    <div class="main-content">
        <h1><a href="/admin/Time_Record">Time Record > </a> DepEd SF2</h1>
       
        <section class="section-header">
        <header>

                        <div class="app-list-options">

                        <div class="custom-select" style="padding:14px;">
                       
                        <i class="fa fa-caret-down" aria-hidden="true"></i>

                        <select style="margin-left:5px;" id="gradeFilter">
                        <option value="">Filter by Grade</option>
                        <option value="Grade 1">Grade 1</option>
                        <option value="Grade 2">Grade 2</option>
                        <option value="Grade 3">Grade 3</option>
                        <option value="Grade 4">Grade 4</option>
                        <option value="Grade 5">Grade 5</option>
                        <option value="Grade 6">Grade 6</option>
                        <option value="Grade 7">Grade 7</option>
                        <option value="Grade 8">Grade 8</option>
                        <option value="Grade 9">Grade 9</option>
                        <option value="Grade 10">Grade 10</option>
                        <option value="Grade 11">Grade 11</option>
                        <option value="Grade 12">Grade 12</option>
                        
                        
                    </select>

                    
                        </div>

                        <div class="custom-select" style="padding:14px;">

                        <i class="fa fa-caret-down" aria-hidden="true"></i>

                        <select style="margin-left:5px;" id="sectionFilter">
                            <option value="">Filter by Section</option>
                            <option value="A">Section Alpha</option>
                            <option value="B">Section Beta</option>
                            <option value="B">Section Gamma</option>
                        </select>
                        </div>

                        <div class="custom-select">

                        <span style="margin-right:5px;"> Date <br> From </span> <input type="date">

                        </div>

                        <div class="custom-select" style="margin-right:20px;">

                        <span style="margin-right:5px;"> Date <br> From </span> <input type="date">

                        </div>

                            <button onclick="applyFilter()" class="filter"> Apply Filter </button>
							
						</div>

					</header>

            </section>
        <div class="container">
            <div class="lists">
                <!--Create a drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:1</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _1" onclick="dropInfo(1)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_1" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- refer to the code above for drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:2</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _2" onclick="dropInfo(2)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_2" class="detail">
                    <div class="option">
                    <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 3 drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:3</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _3" onclick="dropInfo(3)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_3" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 4 drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:4</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _4" onclick="dropInfo(4)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_4" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 5 drop-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:5</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _5" onclick="dropInfo(5)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_5" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!--Grade 6 Dropdown-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:6</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _6" onclick="dropInfo(6)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_6" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 7 Dropdown -->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:7</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _7" onclick="dropInfo(7)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_7" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 8 drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:8</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _8" onclick="dropInfo(8)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_8" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 9 drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:9</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _9" onclick="dropInfo(9)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_9" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 10 drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:10</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _10" onclick="dropInfo(10)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_10" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 11 drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:11</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _11" onclick="dropInfo(11)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_11" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
                <!-- Grade 12 drop down-->
                <div class="view">
                    <div class="label label-group">
                        <p>Dep Ed Form</p>
                        <p>January 1, 2024</p>
                    </div>
                    <div class="label-grade label-group">
                        <p>Grade:12</p>
                    </div>
                    <div class="dropdown">
                        <i class="fas fa-chevron-right _12" onclick="dropInfo(12)" aria-expanded="false"></i>
                    </div>
                </div>
                <div id="_12" class="detail">
                    <div class="option">
                        <p>Section 1: Alpha</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 2: Beta</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option">
                        <p>Section 3: Gamma</p>
                        <div class="option-choice">
                            <i class="fas fa-print"></i>
                            <i class="fas fa-file-export"></i>
                        </div>
                    </div>
                    <div class="option-all">
                        <div class="print-all">
                            <i class="fas fa-print"></i>
                            <small>Print all</small>
                        </div>
                        <div class="export-all">
                            <i class="fas fa-file-export"></i>
                            <small>Export all</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function dropInfo(id){
            let classSelector="._"+id;
            let idSelector="_"+id;
            let dropdown=document.querySelector(classSelector);
            let detailEl=document.getElementById(idSelector);
            let isExpanded=dropdown.getAttribute("aria-expanded");
            if(isExpanded==="false"){
                dropdown.setAttribute('aria-expanded','true');
                dropdown.classList.toggle('animate');
                detailEl.classList.toggle('show');
            }
            else{
                dropdown.setAttribute('aria-expanded','false');
                dropdown.classList.remove('animate');
                detailEl.classList.remove('show');
            }
        }
        function applyFilter() {
        var grade = document.getElementById("gradeFilter").value;
        var section = document.getElementById("sectionFilter").value;
        
        var table = document.getElementById("dataTable");
        var rows = table.getElementsByTagName("tr");
        
        for (var i = 2; i < rows.length; i++) {
            var row = rows[i];
            var nameCell = row.getElementsByTagName("td")[0].innerText.toLowerCase();
            var gradeCell = row.getElementsByTagName("td")[1];
            var sectionCell = row.getElementsByTagName("td")[2];
            
            if ((grade === "_" || gradeCell.innerHTML === grade) &&
                (section === "_" || sectionCell.innerHTML === section)
                (name === "_" || nameCell.includes(name))) {
                row.style.display = "_";
            } else {
                row.style.display = "none";
            }
        }
    }
    </script>
    <script src="/JS/navevent.js"></script>

</body>
</html>