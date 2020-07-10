<button id="insertButton">Thêm input</button>
<br>
<form action="giai-b3.php" method="get">
    <div id="target"> 
        <input type="text" name="number[]">
    </div>
    <button type="submit">Tính tổng</button>
</form>

<script>
    var insertButton = document.querySelector('#insertButton');
    var divTag = document.querySelector('#target');
    insertButton.onclick = function(){
        var brTag = document.createElement('BR');
        divTag.appendChild(brTag);
        var inputTag = document.createElement('INPUT');
        inputTag.setAttribute('type', 'text');
        inputTag.setAttribute('name', 'number[]');
        divTag.appendChild(inputTag);

    }
</script>