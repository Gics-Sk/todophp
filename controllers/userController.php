<?php 
class UserController {
public function HomePage() {
     require_once '../views/Home.php';
}
public function index() {
echo'index';
}
public function create() {
echo'CreateUser';
}
public function delete() {
echo'deleteUser';
}
public function update() {     
echo'updateUser';
}
}
