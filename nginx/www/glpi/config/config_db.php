<?php
class DB extends DBmysql {
   public $dbhost = 'server-mysql';
   public $dbuser = 'glpi_admin';
   public $dbpassword = 'GlpiAdminPassWd';
   public $dbdefault = 'glpidb';
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
