    
<script src="js/scrpit.js"></script>
<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="js/scrolTrigger.js"></script>

<script>
    $('#textarea').bind('input propertychange', function(){
            // alert("change occur");
            $.ajax({
                method: 'POST',
                url: "levi.php",
                data: {content: $("#Submitfeild").val() }
            })
        });
</script>

</body>
</html>