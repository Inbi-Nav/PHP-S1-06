<?php
require 'CourseLanguages.php';
require 'CourseType.php';
class FullStackCourse {
    public function __construct
    (
        public string $name,
        public string $url,
        public CourseLanguages $language,
        public CourseType $type,
    ){}

    public function __toString()
    {
       return " {$this->name} | {$this->url} | {$this->language->name} | {$this->type->name}";
    }
}

?>