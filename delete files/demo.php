<script>
function openWindow(h, w, url) {
  leftOffset = (screen.width/2) - w/2;
  topOffset = (screen.height/2) - h/2;
  window.open(url, this.target, 'left=' + leftOffset + ',top=' + topOffset + ',width=' + w + ',height=' + h + ',resizable,scrollbars=yes');

}
</script>
<form name="form2" id="form2" method="post" action="searchrule.php" onsubmit="openWindow(500, 500, 'searchrule.php');">
<input type="submit" value="click here"/>
</form>