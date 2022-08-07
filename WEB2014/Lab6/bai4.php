<?php

// set cookie
setcookie('user_id', 5, time() + 60);

// clear cookie
setcookie('user_id', '', time() - 60);