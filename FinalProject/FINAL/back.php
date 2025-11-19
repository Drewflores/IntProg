<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <style>
          body {
            text-align: center;
          }
        </style>
        <title>EJ-Forecast</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <p>☀</p>
                <p>EJ-Forecast</p>
            </div>
            <div class="navContainer">
                <nav>
                    <ul>
                        <li>
                            <a href="index.html" target="_self">Home</a>
                        </li>  
                        <li>
                            <a href="info.html">Weather Info</a>
                        </li>
                        <li>
                            <a href="hotline.html">Hotline</a>
                        </li>                    
                    </ul>
                </nav>
            </div>
        </header>
<!-- |||||||||||||||||||||||||||||||||||||||||| PHP ||||||||||||||||||||||||||||||||||||||||||| -->

    <?php
        $weatherCondition = isset($_POST["weatherCondition"]) ? $_POST["weatherCondition"] : null;

        if (isset($weatherCondition)){

            $condition = strtolower($weatherCondition);
            
            switch($condition){
                case ($condition === "clear sky"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Outdoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Go for a walk</li>
                                  <li>Have a picnic</li>
                                  <li>Play sports like badminton, basketball or volley ball</li>
                                  <li>Go for a bike ride</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Leisure activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Have a backyard BBQ</li>
                                  <li>Read a book in the sun</li>
                                  <li>Take a refreshing swim</li>
                                  <li>Enjoy the sunset</li>
                                </ul> 
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                       
                            </div>
                         ";
                    break;
                case ($condition === "mainly clear" || $condition === "partly cloudy" || $condition === "overcast"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Have a movie marathon</li>
                                  <li>Play board games or video games</li>
                                  <li>Cook or bake something new</li>
                                  <li>Practice yoga or meditation</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Read a book by the window</li>
                                  <li>Take a nap or sleep</li>
                                  <li>Enjoy a cup of hot coffee or tea</li>
                                  <li>Listen to music or podcast</li>
                                </ul>
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                       
                            </div>
                         ";
                    break;
                case ($condition === "fog" || $condition === "depositing rime fog"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Stay indoors and enjoy a warm cup of tea or hot chocolate</li>
                                  <li>Read a mysterious or thriller novel</li>
                                  <li>Listen to eerie music or podcast</li>
                                  <li>Have a relaxing spa day at home</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Mysterious activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Take a spooky walk or hike</li>
                                  <li>Capture foggy photos</li>
                                  <li>Write a short story or poetry</li>
                                  <li>Practice photography with foggy effects</li>
                                </ul>
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                        
                            </div>
                         ";
                    break;
                case ($condition === "light drizzle" || $condition === "moderate drizzle" || $condition === "dense drizzle"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Curl up with a good book and a warm blanket</li>
                                  <li>Have a movie marathon with comfort food</li>
                                  <li>Practice yoga or meditation with calming music</li>
                                  <li>Enjoy a warm cup of coffee or tea</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write, draw or paint inspired by the rain</li>
                                  <li>Play indoor games or puzzles with friends or family</li>
                                  <li>Cook or bake something comforting</li>
                                </ul> 
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                       
                            </div>
                         ";
                    break;
                case ($condition === "light freezing drizzle" || $condition === "dense freezing drizzle"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Hibernation mode:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Stay bundled up with extra blankets</li>
                                  <li>Indulge in hot comfort food like soup or hot chocolate</li>
                                  <li>Have a movie marathon with classic winter films</li>
                                  <li>Take a long, warm bath or shower</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Wintery creativity:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write winter-themed stories or poetry</li>
                                  <li>Draw or paint winter landscapes</li>
                                  <li>Try indoor winter crafts like knitting or paper snowflakes</li>
                                </ul>
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                        
                            </div>
                         ";
                    break;
                case ($condition === "slight rain" || $condition === "moderate rain" || $condition === "heavy rain"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Have a hot food and movie fest</li>
                                  <li>Stay in panjamas all day</li>
                                  <li>Play board games or video games</li>
                                  <li>Take a relaxing nap or sleep on the bed</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write, draw or paint inspired by the rain</li>
                                  <li>Play music or sing along to your faves</li>
                                  <li>Cook or bake something comforting</li>
                                </ul> 
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                       
                            </div>
                         ";
                    break;
                case ($condition === "light freezing rain" || $condition === "heavy freezing rain"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Stay extra bundled up with warm blankets</li>
                                  <li>Indulge in super comforting food like hot soup or stew</li>
                                  <li>Have a winter movie marathon with hot cocoa</li>
                                  <li>Relax by the window and watch the rain</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write winter-themed stories or poetry</li>
                                  <li>Draw or paint icy landscapes</li>
                                  <li>Try indoor winter crafts like making snowflakes paper art</li>
                                </ul>
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                  
                            </div>
                         ";
                    break;
                case ($condition === "slight snow fall" || $condition === "moderate snow fall" || $condition === "heavy snow fall"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Snow day activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Build a snowman or snow fort</li>
                                  <li>Have a hot hot-chocolate and movie fest</li>
                                  <li>Play indoor games or puzzles with hot snacks</li>
                                  <li>Take a relaxing winter nap</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write a winter stories or poetry</li>
                                  <li>Draw or paint snowy landscapes</li>
                                  <li>Make snow-themed crafts or decorations</li>
                                </ul> 
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                       
                            </div>
                         ";
                    break;
                case ($condition === "snow grains"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Snow day activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Build a snowman or snow fort</li>
                                  <li>Have a hot hot-chocolate and movie fest</li>
                                  <li>Play indoor games or puzzles with hot snacks</li>
                                  <li>Take a relaxing winter nap</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write a winter stories or poetry</li>
                                  <li>Draw or paint snowy landscapes</li>
                                  <li>Make snow-themed crafts or decorations</li>
                                </ul>
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                    
                            </div>
                         ";
                    break;
                case ($condition === "slight rain showers" || $condition === "moderate rain showers" || $condition === "violent rain showers"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Refreshing indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Stay cozy and watch the droplets</li>
                                  <li>Enjoy a warm cup of coffee or tea</li>
                                  <li>Have a relaxing spa day at home</li>
                                  <li>listen to calming music or nature sounds</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write short stories or poetry inspired by the rain</li>
                                  <li>Draw or paint rainy landscapes</li>
                                  <li>Try indoor crafts like making DIY projects</li>
                                </ul> 
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                       
                            </div>
                         ";
                    break;
                case ($condition === "slight snow showers" || $condition === "heavy snow showers"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Stay bundled up and watch the snowflakes</li>
                                  <li>Have a hot hot-chocolate and movie fest</li>
                                  <li>Play indoor games or puzzles with hot snacks</li>
                                  <li>Take a relaxing winter nap</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write a winter stories or poetry</li>
                                  <li>Draw or paint snowy landscapes</li>
                                  <li>Make snow-themed crafts or decorations</li>
                                </ul>  
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                      
                            </div>
                         ";
                    break;
                case ($condition === "thunderstorm" ):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Stay extra cozy with blankets and pillows</li>
                                  <li>Enjoy hot comfort food like soup or hot chocolate</li>
                                  <li>Have a movie marathon with dramatic music</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write storm-themed stories or poetry</li>
                                  <li>Draw or paint stormy landscapes</li>
                                  <li>Try indoor crafts like making lightning-inspired art</li>
                                </ul>
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                        
                            </div>
                         ";
                    break;
                case ($condition === "thunderstorm with slight hail" || $condition === "thunderstorm with heavy hail"):
                    echo "  <div>
                                <h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                                <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>Here are some things you can do in this weather condition</p>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Cozy indoor activities:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Stay extra snug and safe indoors</li>
                                  <li>Enjoy hot comfort food like soup or hot chocolate</li>
                                  <li>Have a movie marathon with epic music</li>
                                  <li>Watch the hail from safe window spot</li>
                                </ul>
                                <h3 style='color: #0aa69a; font-size: 1.8rem; font-family: Monospace, sans-serif; margin-bottom: 1rem'>Creative pursuits:</h3>
                                <ul style='list-style-type: none; padding: 0; margin: 0 0 2rem 0; color: #0aa69a; font-size: 1.3rem; font-style: sans-serif;'>
                                  <li>Write strom-themed stories or poetry</li>
                                  <li>Draw or paint hailstorm landscapes</li>
                                  <li>Try indoor crafts like making ice-inspired art</li>
                                </ul>
                                <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>                      
                            </div>
                         ";
                    break;
                default:
                    echo "<h1 style='color: #0aa69a; font-size: 2.6rem; font-family: Monospace, sans-serif; margin-top: 4rem; margin-bottom: 0rem;'>$weatherCondition</h1>
                          <p style='color: #0aa69a; font-size: 1.5rem; font-style: sans-serif; margin-top: 1rem;'>$weatherCondition is not a valid weather condition</p>
                          <a href='index.html' style='text-decoration: none; font-size: 1.5rem; font-weight: bold; color: #017371;'>Go back</a>
                    ";          
            }
        }
    ?>

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
    </body>
</html>
