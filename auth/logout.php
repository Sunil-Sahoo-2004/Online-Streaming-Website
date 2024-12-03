<?php
   session_start();
   session_unset();
   session_destroy();

   header("location: http://localhost:8000/anime-main");
?>