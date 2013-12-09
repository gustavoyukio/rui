<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon') ;
        echo $this->Html->css( array('cake.generic','main'));
        // Fetch
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

</head>
<body>

    <!-- Header -->
    <header>
        <nav>
        	<ul class='main-nav'>
        		<li><a href="#"> Logo </a></li>
        		<li><a href="#"> Streams </a></li>
        		<li><a href="#"> Media </a></li>
        		<li><a href="#"> VODs </a></li>
        		<li><a href="#"> Forum </a></li>
                <li><a href="#"> Tournaments </a></li>
        	</ul>
            <ul class='icones'>
                <li> 
                    <a href=''> a </a> </li>
                <li> 
                    <a href=''> a </a> </li>
                <li> 
                    <a href=''> a </a> </li>
            </ul>
        </nav>
        <h1>
            2L Dota <img src='' alt='logo do site' rel='logo do site'>
        </h1>
    </header>

    <!-- Main Content -->
    <div role='main'>
        <div class='wrapper'>
            
            <!-- Mini Calendar -->
            <section class='calendar'>
                <ul>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>
                    <li> 
                        <div class='time-win'> Na'Vi <span class='score'> 0 </span> </div>
                        <div class='time-loss'> Alliance <span class='score'> 3 </span> </div>
                        <div class='evento'> The Internat </div>
                    </li>                    
                </ul>
            </section>
            
            <!--

            <!-- Right Bar -->
            <aside>
                <h2> Apostas </h2>
                <ul>
                    <li> 
                        Na'vi vs EG 
                        <ul>
                            <li> Stream: </li>
                        </ul>
                    </li>
                    <li> SpeedGaming vs A</li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </aside>
            
            <section class='content'>
                <!-- Banners -->
                <section class='banners'>
                    
                </section>
                
                <!-- Lista de novidades -->
                <section class="news-list">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </section>
                
                <!-- Patrocinadores -->
                <section class="patrocinadores">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </section>
            </section>

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class='wrapper'>
            
            <section class='news'></section>

            <aside>asd</aside>

        </div>
    </footer>

    <!-- SQL Dump -->
    <?php 
        // SQL DUMP
        // echo $this->element('sql_dump'); 
	?>
    <script src='http://codeorigin.jquery.com/jquery-1.10.2.min.js'></script>
    <?php echo $this->Html->script('script'); ?>
</body>
</html>
