<footer>
<h1>IT ir Spēks &copy; 2023</h1>
<hr>
<p class="STD"><b>S</b>mart <b>T</b>ech <b>D</b>evelopment<p>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="script.js"></script>
</body>
</html>

<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['lietotajvards'])){
        echo "<style>#login-btn {display: none}</style>";
        echo "<style>.logout {display: inline-block}</style>";
    }


?>