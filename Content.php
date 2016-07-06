<?php
class Content {

protected $title = "";
 
protected $lang = "";

public function __construct($lang = "de-DE") {
    $this->lang = $lang;
}
 
public function __destruct() {
 
}

public function title () {
    if ($this->title != "") {
        return $this->title;
    } else {
        return "Es wurde kein Titel definiert.";
    } 
}

public function lang () {
    if ($this->lang != "") {
        return $this->lang;
    } else {
        return "de-DE";
    } 
}

public function header () {
    return "<p>header</p>";
}

public function main () {
    return "<p>main</p>";
}

public function footer () {
    return "<p>footer</p>";
}

}
 ?>
