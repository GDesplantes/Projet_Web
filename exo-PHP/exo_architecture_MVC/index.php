<?php

require('models/model.php');

$posts = getPosts();

require('templates/homepage.php');