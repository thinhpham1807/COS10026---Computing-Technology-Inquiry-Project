<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Assignment 1 part 1">
    <meta name="keywords" content="Assignment 1, cos10026, html, css">
    <meta name="author" content="Le Minh Kha">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S7VEN | About</title>
    <link type="text/css" rel="stylesheet" href="styles/style.css">
    
  </head>
  <!--start body about block, general modification -->
  <body>

    <!--start nav bar block -->
    <?php 
      include_once 'menu.inc';
    ?>
  <!--end nav bar block -->

    <div class="wrapper">
      <!--start projects block -->
      <section class="projects">
        <h1 class="custom-heading">About us</h1>
        <!--start divider block for the projects division -->
        <div class="divider">
          <div class="about-person">
          <!--start img block   -->
          <figure class="img">
            <img src="images/kha.png" alt="Minh Kha" id="K" class="profpic">
            <!--start tags block -->
            <figcaption id="MKha"><h2 class="custom-heading">Le Minh Kha</h2></figcaption>
          </figure>
            <br>
            <div class="about-desc" id="Kha">
              <div class="link-container">             
                <p>Email: <a class="about-mail" href="mailto:104179506@student.swin.edu.au">104179506@student.swin.edu.au</a></p>              
              </div>
              <h3 class ="custom-heading">My hometown is located in Thua Thien Hue, the former capital of Vietnam, famous for the forbiden citadel and emperor tombs.</h3>
            <!--end tags block -->
            <br>
              <!--start list block -->
              <dl class="about-list">
                <dt><strong>Age:</strong></dt>
                <dd>18 <br> </dd>
                <dt><strong> Gender:</strong></dt>
                <dd>Male <br> </dd>
                <dt><strong> Education:</strong></dt>
                <dd>Undergraduate</dd>
              </dl>
              
              <h3 class="custom-heading"><strong>Favorite books:</strong></h3>
              <dl>
                <dt>- The 7½ Deaths of Evelyn Hardcastle</dt>
                <dd>by Stuart Turton</dd>
                <dt>- Jane Eyre</dt>
                <dd>by Charlotte Brontë</dd>
              </dl>
              
              <!--end list block -->

              <!-- start table block -->
              <table class="schedule">
                <tr>
                  <th><p>Time</p></th>
                  <th><p>Monday</p></th>
                  <th><p>Tuesday</p></th>
                  <th><p>Wednesday</p></th>
                  <th><p>Thursday</p></th>
                  <th><p>Friday</p></th>
                </tr>
                <tr>
                  <td>8:00 - 10:00</td>
                  <td class="subject1">TNE10006</td>
                  <td class="subject2">COS20007</td>
                  <td></td>
                  <td></td>
                  <td class="subject3">COS10026</td>
                </tr>
                <tr>
                  <td>10:00 - 12:00</td>
                  <td class="subject1">TNE10006</td>
                  <td class="subject2">COS20007</td>
                  <td></td>
                  <td></td>
                  <td class="subject3">COS10026</td>
                </tr>
                <tr>
                  <td>1:00 - 4:00</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                
              </table>
            <!--end table block -->
              </div>
            <!--end projects block -->
          </div>
            <!--start projects block --> 
              
              <figure class="img">
                <!--start img block -->
                <img src="images/quangdanh.png" alt="Quang Danh" id="D" class="profpic">
                <figcaption id="QDanh"><h2 class="custom-heading">Than Bui Quang Danh</h2></figcaption>
              </figure>
                <br>
                <div class="about-desc" id="Danh">
                <!--start tags block -->
                <div class="link-container">       
                  <p>Email: <a class="about-mail" href="mailto:1040688795@student.swin.edu.au">1040688795@student.swin.edu.au</a></p>              
                </div>
                <h3 class="custom-heading">Ho Chi Minh City, also known as Saigon, is one of Vietnam's two largest cities, it is very bustling at nightfall</h3>
                 <!--end tags block -->
                 <br>
                <!--start list block -->
                <dl class="about-list">
                  <dt>Age:</dt>
                  <dd>20 <br> </dd>
                  <dt>Gender:</dt>
                  <dd>Male <br> </dd>
                  <dt>Education:</dt>
                  <dd>Undergraduate</dd>
                </dl>
                
                <h3 class="custom-heading"><strong>Favourite films:</strong></h3>
                <dl>
                  <dt>- The Queen Gambit</dt>
                  <dd></dd>
                  <dt>- Money Heist</dt>
                  <dd></dd>
                </dl>
                
                 <!--end list block -->

                <!--start table block -->
              <table class="schedule">
              <tr>
                <th><p>Time</p></th>
                <th><p>Monday</p></th>
                <th><p>Tuesday</p></th>
                <th><p>Wednesday</p></th>
                <th><p>Thursday</p></th>
                <th><p>Friday</p></th>
              </tr>
              <tr>
                <td>8:00 - 10:00</td>
                <td></td>
                <td></td>
                <td class="subject1">TNE10006</td>
                <td></td>
                <td class="subject3">COS10026</td>
              </tr>
              <tr>
                <td>10:00 - 12:00</td>
                <td></td>
                <td></td>
                <td class="subject1">TNE10006</td>
                <td></td>
                <td class="subject3">COS10026</td>
              </tr>
              <tr>
                <td>1:00 - 4:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
            </table>
                <!--end table block -->
              </div>   
                 <!--end projects block -->
        
          <!--start projects block -->

          <figure class="img">
            <!--start img block -->
            <img src="images/thanhminhhov.png" alt="Thanh Minh" id="M" class="profpic">
            <figcaption id="TMinh"><h2 class="custom-heading">Tran Thanh Minh</h2></figcaption>
          </figure>
            <br>
            <!--start tags block -->
            <div class="about-desc" id="Minh">
            <div class="link-container">
              
              <p>Email: <a class="about-mail" href="mailto:103809048@student.swin.edu.au">103809048@student.swin.edu.au</a></p>              
            </div>
            <h3 class="custom-heading"> Nghe An is a peaceful place where I can chill out after many hours of focus on my deadlines.</h3>
            <!--end tags block -->
            <br>
            <!--start list block -->
            <dl class="about-list">
              <dt>Age:</dt>
              <dd>20 <br> </dd>
              <dt>Gender:</dt>
              <dd>Male <br> </dd>
              <dt>Education:</dt>
              <dd>Undergraduate</dd>
            </dl>
            <h3 class="custom-heading"><strong>Favourite movies:</strong></h3>
            <dl>
              <dt>- Ant man</dt>
              <dd></dd>
              <dt>- Infinity War</dt>
              <dd></dd>
            </dl>
            
          <!--end list block -->
          <!--start table block -->
          <table class="schedule">
            <tr>
              <th><p>Time</p></th>
              <th><p>Monday</p></th>
              <th><p>Tuesday</p></th>
              <th><p>Wednesday</p></th>
              <th><p>Thursday</p></th>
              <th><p>Friday</p></th>
            </tr>
            <tr>
              <td>8:00 - 10:00</td>
              <td></td>
              <td class="subject2">COS20007</td>
              <td class="subject1">TNE10006</td>
              <td></td>
              <td class="subject3">COS10026</td>
            </tr>
            <tr>
              <td>10:00 - 12:00</td>
              <td></td>
              <td class="subject2">COS20007</td>
              <td class="subject1">TNE10006</td>
              <td></td>
              <td class="subject3">COS10026</td>
            </tr>
            <tr>
              <td>1:00 - 4:00</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            
          </table>
           <!--end table block -->
          </div>
          <!--end projects block -->

          <!--start projects block -->

          <figure class="img">
            <!-- start img block -->
            <img src="images/thinh1.jpg" alt="Duc Thinh" id="T" class ="profpic">
            <figcaption id="DThinh"><h2 class="custom-heading">Pham Duc Thinh</h2></figcaption>
          </figure>
            <br>
            <div class="about-desc" id="Thinh">
            <!-- start tags block -->
            <div class="link-container">
              
              <p>Email: <a class="about-mail" href="mailto:104169675@student.swin.edu.au">104169675@student.swin.edu.au</a></p>              
            </div>           
            <h3 class="custom-heading"> Ninh Binh is a province in northern Vietnam, it has a beautiful landscape made up of hundreds of limestone mountains among lush fields. </h3>
             <!-- end tags block -->
             <br>
            <!-- start list block -->
            <dl class="about-list">
              <dt>Age:</dt>
              <dd>19<br></dd>
              <dt>Gender:</dt>
              <dd>Male<br></dd>
              <dt>Education:</dt>
              <dd>Undergraduate</dd>
            </dl>
            <h3 class="custom-heading"><strong>Favourite books:</strong></h3> 
            <dl>
              <dt>- Atomic Habits</dt>
              <dd>by James Clear</dd>
              <dt>- Sapiens</dt>
              <dd>by Yuval Noah Harari</dd>
            </dl>
            
            <!-- end list block-->
            <!-- start table block -->
            <table class="schedule">
              <tr>
                <th><p>Time</p></th>
                <th><p>Monday</p></th>
                <th><p>Tuesday</p></th>
                <th><p>Wednesday</p></th>
                <th><p>Thursday</p></th>
                <th><p>Friday</p></th>
              </tr>
              <tr>
                <td>8:00 - 10:00</td>
                <td></td>
                <td class="subject2">COS20007</td>
                <td class="subject1">TNE10006</td>
                <td></td>
                <td class="subject3">COS10026</td>
              </tr>
              <tr>
                <td>10:00 - 12:00</td>
                <td></td>
                <td class="subject2">COS20007</td>
                <td class="subject1">TNE10006</td>
                <td></td>
                <td class="subject3">COS10026</td>
              </tr>
              <tr>
                <td>1:00 - 4:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
            </table>
            <!-- end table block -->
          </div>
          <!-- end projects block -->

          <figure class="img">
            <img src="images/phat1.png" alt="Nghia Phat" id="P" class="profpic">
            <figcaption id="NPhat"><h2 class="custom-heading">Chau Nghia Phat</h2></figcaption>
          </figure>
            <br>
            <div class="about-desc" id="Phat">
            <!-- start tags block -->
            <div class="link-container">
              
              <p>Email: <a class="about-mail" href="mailto:104055677@student.swin.edu.au">104055677@student.swin.edu.au</a></p>              
            </div>
            <h3 class="custom-heading">Ho Chi Minh City is the largest city in Vietnam and is located in the southern part of the country and is known for its historic landmarks.</h3>
             <!-- end tags block -->
             <br>
            <!-- start list block -->
            <dl class="about-list">
              <dt><strong>Age:</strong></dt>
              <dd>20<br></dd>
              <dt><strong>Gender:</strong></dt>
              <dd>Male<br></dd>
              <dt><strong>Education:</strong></dt>
              <dd>Undergraduate</dd>
            </dl>
            <h3 class="custom-heading"><strong>Favorite musics:</strong></h3> 
            <dl>
              <dt>Something Just like this</dt>
              <dd>- The Chainsmokers</dd>
              <dt>Treat you better</dt>
              <dd>- Shawn Mendes</dd>
            </dl>
            <!-- end list block -->
          <!-- start table block -->
          <table class="schedule">
            <tr>
              <th><p>Time</p></th>
              <th><p>Monday</p></th>
              <th><p>Tuesday</p></th>
              <th><p>Wednesday</p></th>
              <th><p>Thursday</p></th>
              <th><p>Friday</p></th>
            </tr>
            <tr>
              <td>8:00 - 10:00</td>
              <td class="subject1">TNE10006</td>
              <td class="subject2">COS20007</td>
              <td></td>
              <td></td>
              <td class="subject3">COS10026</td>
            </tr>
            <tr>
              <td>10:00 - 12:00</td>
              <td class="subject1">TNE10006</td>
              <td class="subject2">COS20007</td>
              <td></td>
              <td></td>
              <td class="subject3">COS10026</td>
            </tr>
            <tr>
              <td>1:00 - 4:00</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            
          </table>
              <!--end projects block -->
            </div>
            <!-- end table block -->
          </div>
          <!--end divider block for the projects division -->
        </section>
    
      </div>
   </body> 
   <!-- end body about block -->