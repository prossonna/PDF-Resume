<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frame 1</title>

    <style>
        body {
            font-family: Roboto,sans-serif!important;
            font-size: 12px;
            min-width: 400px;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        td.t-col-1 {
            padding: 10px 0 0px;
            width: 12%;
        }
        
        th.t-col-2 {
            text-align: left;
            padding: 10px 0 0;
        }
        li.t-col-2-data {
            margin-bottom: 5px;
        }
        @font-face {
            font-family: "FontAwesomeRegular";
            font-weight: normal;
            font-style : normal;
            src : url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/webfonts/fa-regular-400.ttf") format("truetype");
        }
        @font-face {
            font-family: "FontAwesomeBrands";
            font-weight: normal;
            font-style : normal;
            src : url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/webfonts/fa-brands-400.ttf") format("truetype");
        }
        @font-face {
            font-family: "FontAwesomeSolid";
            font-weight: bold;
            font-style : normal;
            src : url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/webfonts/fa-solid-900.ttf") format("truetype");
        } 

        .fas{
            font-weight: bold !important;
            font-family: FontAwesomeSolid !important;
        }
        .fas:before{
            font-weight: bold !important;
            font-family: FontAwesomeSolid !important;
        }
        .fab{
            font-weight: normal !important;
            font-family: FontAwesomeBrands !important;
        }
        .fab:before{
            font-weight: normal !important;
            font-family: FontAwesomeBrands !important;
        }
        .far{
            font-weight: normal !important;
            font-family: FontAwesomeRegular !important;
        }
        .far:before{
            font-weight: normal !important;
            font-family: FontAwesomeRegular !important;
        }
        
    </style>

</head>

<body>
    <div class="banner-sec" style="background: #443b3b; padding: 20px 0;">        
        <h1 style="text-align: center; text-transform: uppercase; color: #FFF; margin-bottom: 0">John james Doe</h1>
        <p style="text-align: center; font-style: italic; color: #6fa2bb">example@gmail.com</p>
        <p style="text-align: center; color: #fff;">+977 9812365423</p>
        <hr style="padding: 2px; background: #b3a5a5; border: none; margin: auto; width:95%;">
        <p style="text-align: center; font-style: italic; font-size: 18px; text-transform: uppercase; color: #FFF;">Branding & media Specialist</p>
    </div>

    <div style="padding: 20px 0;">
        <div class="container">
            <div style="margin-bottom: 20px;">
                <hr style="margin: 7px 20px 7px 20px; border-top: 1px solid #e65f5f;">
                <p style="margin: 7px 0px 7px 20px;  text-transform: uppercase;  font-size: 18px; font-weight: 600; letter-spacing: 1px; color: #e65f5f;">about</p>
                <hr style="margin: 7px 20px 7px 20px; border-top: 1px solid #e65f5f;">
                <p style="margin:0 20px">With over 18 years experience in both advertising and branding fields areas, i am looking for a challenging carrer opportunity as Communication Manager<p>
            </div>
            <div>
                <hr style="margin: 7px 20px 7px 20px; border-top: 1px solid #e65f5f;">
                <p style="margin: 7px 0px 7px 20px;  text-transform: uppercase;  font-size: 18px; font-weight: 600; letter-spacing: 1px; color: #e65f5f;">Experience</p>
                <hr style="margin: 7px 20px 7px 20px; border-top: 1px solid #e65f5f;">
                <table style="width: 100%; margin:0 20px;">
                    <tr>
                        <td class="t-col-1">2015-2017</td>
                        <th class="t-col-2">Company D</th>
                    </tr>
                    <tr>
                        <td class="t-col-1"></td>
                        <td class="t-col-2">
                            <ul>
                                <li class="t-col-2-title"></li>
                                <li class="t-col-2-data" style="font-style: italic;">Managing Director, Melbourne</li>
                                <li class="t-col-2-data">Managing the B2B communication of Company D</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-col-1">2011-2015</td>
                        <th class="t-col-2">Company C</th>
                    </tr>
                    <tr>
                        <td class="t-col-1"></td>
                        <td class="t-col-2">
                            <ul>
                                <li class="t-col-2-title"></li>
                                <li class="t-col-2-data" style="font-style: italic;">Design Consultant, Los Angeles - New York</li>
                                <li class="t-col-2-data">Consultant two stategic departments in Los Angeles and New York on branding</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-col-1">2004-2009</td>
                        <th class="t-col-2">Company B</th>
                    </tr>
                    <tr>
                        <td class="t-col-1"></td>
                        <td class="t-col-2">
                            <ul>
                                <li class="t-col-2-title"></li>
                                <li class="t-col-2-data" style="font-style: italic;">Brand Strategic, Madrid</li>
                                <li class="t-col-2-data">Repositioning Company B as an international fashion brand</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-col-1">1999-2003</td>
                        <th class="t-col-2">Company A</th>
                    </tr>
                    <tr>
                        <td class="t-col-1"></td>
                        <td class="t-col-2">
                            <ul>
                                <li class="t-col-2-title"></li>
                                <li class="t-col-2-data" style="font-style: italic;">Junior Medior UX Designer, London</li>
                                <li class="t-col-2-data">Designing crossmedia campaign for major brands, targetting large brands</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="margin-top: 25px;">
                <hr style="margin: 7px 20px 7px 20px; border-top: 1px solid #e65f5f;">
                <p style="margin: 7px 0px 7px 20px;  text-transform: uppercase;  font-size: 18px; font-weight: 600; letter-spacing: 1px; color: #e65f5f;">Education</p>
                <hr style="margin: 7px 20px 7px 20px; border-top: 1px solid #e65f5f;">
                <table style="width: 100%;  margin:0 20px;">
                    <tr>
                        <td class="t-col-1">1995-1999</td>
                        <th class="t-col-2">Strategic Branding</th>
                    </tr>
                    <tr>
                        <td class="t-col-1"></td>
                        <td class="t-col-2">
                            <ul>
                                <li class="t-col-2-title"></li>
                                <li class="t-col-2-data" style="font-style: italic;">London Business School, London</li>
                                <li class="t-col-2-data">learning about strategic visual branding</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-col-1">1990-1994</td>
                        <th class="t-col-2">Graphic and media design</th>
                    </tr>
                    <tr>
                        <td class="t-col-1"></td>
                        <td class="t-col-2">
                            <ul>
                                <li class="t-col-2-title"></li>
                                <li class="t-col-2-data" style="font-style: italic;">Unviversity of Brington, Brington</li>
                                <li class="t-col-2-data">Specialization on Digital Media and Graphic Design</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="t-col-1">1988-1990</td>
                        <th class="t-col-2">Visual Arts</th>
                    </tr>
                    <tr>
                        <td class="t-col-1"></td>
                        <td class="t-col-2">
                            <ul>
                                <li class="t-col-2-data" style="font-style: italic;">Art School of Chester, Chester</li>
                                <li class="t-col-2-data">Specialization in aesthetics and the basics of design and photography</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div style=" background: #443b3b; padding: 20px 0;"></div>

</body>

</html>