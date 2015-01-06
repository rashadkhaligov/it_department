<?php include("header.php"); ?>

<nav>
         <div class="width">
              <ul>
               <li class="start selected"><a href="index.php">Yeni sorğu</a></li>
               <li class=""><a href="examples.php">Problemlər</a></li>
               <li><a href="logs.php">Loglar</a></li>
                <li><a href="#">Gələcək planlar</a></li>  
             <li class="end"><a href="#">Əlaqə</a></li>
            </ul>
       </div>
  </nav>

    <div id="body" class="width">

		

		<section id="content">

        <article>
            <h3>Form</h3>

            <fieldset>
                <legend>Yeni sorğu</legend>
                <form action="#" method="get">
                    <p><label for="name">Otaq:</label>
                    <input name="name" id="name" value="" type="text" /></p>
                    <p><label for="email">Ad:</label>
                    <input name="email" id="email" value="" type="text" /></p>
                    <p><label for="message">Sikayətin tipi:</label>
                    <select>
                        <option value="volvo">Printer qoşulamyıb</option>
                        <option value="saab">İnternet yoxdur</option>
                        <option value="mercedes">Kompüter işləmir</option>
                        <option value="audi">Outlook işləmir</option>
                        <option value="audi">Proyektor işləmir</option>
                    </select>
                    <p><label for="message">Sikayət:</label>
                    <textarea cols="65" rows="6" name="message" id="message"></textarea></p>
                    
                    <p><input name="send" style="margin-left: 150px;" class="formbutton" value="Yadda saxla" type="submit" /></p>
                </form>
            </fieldset>
        </article>

	    <article>
				


            

		<a href="#" class="button">Read more</a>
		
		</article>
	
		
        </section>
        
        <aside class="sidebar">
	
            <ul>	
                
                <li>
                    <h4>About us</h4>
                    <ul>
                        <li class="text">
                        	<p style="margin: 0;">Xəzər Univeristetində xidməti daha da səmərəli etmək üçün əlimizdən gələnindən daha artığını edirik. 					<a href="#" class="readmore">Read More &raquo;</a></p>
                        </li>
                    </ul>
                </li>
                
                <li>
                	<h4>Search site</h4>
                    <ul>
                    	<li class="text">
                            <form method="get" class="searchform" action="#" >
                                <p>
                                    <input type="text" size="32" value="" name="s" class="s" />
                                    
                                </p>
                            </form>	
						</li>
					</ul>
                </li>
                
            </ul>
		
        </aside>

    	<div class="clear"></div>
    </div>

<?php include("footer.php"); ?>