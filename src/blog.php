
<link rel="import" href="../../bower_components/polymer/polymer.html">
    <link rel="import" href="../../elements.html">
    <dom-module is=html-bind>
  <script>
    Polymer({
      is: 'html-bind',
      properties: {
        content: {
          type: String,
          value: '',
          observer: '_renderHtml'
        }
      },
      _renderHtml(content) {
        this.innerHTML = content;
      }
    });
  </script>
</dom-module>
    <dom-module id="blog-feed">
  <template>
<style>


  blog-post{
width:100%;
max-width:500px;

         margin:  auto;
  position: relative;

}
img {
    width: 100%;
}
</style>


<?php
$dir = "../posts/";
$event = 0;
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
if (substr($file,-1)== "."){

}
else{
$id = $file;
$class = uniqid();
$num = $event++;

$onclick= "onclick ='setpost(" .id. ")'";
echo '<blog-post id= "'.$id.'" content="http://localhost:8000/posts/'.$id.'" '.$onclick.'></blog-post>';

}
    }
    closedir($dh);
  }
}
?>

<script>


</script>

  </template>

  <script>
    Polymer({

      is: 'blog-feed',
properties:{
allText:{
type: String,
notify: true,
},
},
ready: function(){


},



    });

  </script>
</dom-module>
<blog-feed></blog-feed>
