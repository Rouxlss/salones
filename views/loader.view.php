<style>
    
    
.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: center;
	align-content: space-between; 
}

.loader > img {
    width: 300px;
    animation: girar 1.5s linear infinite;
}

.loader.hidden {
    animation: fadeOut 0.5s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }   
}



</style>
   <div class="loader hidde">
    <img src="images/loaddd.gif" alt="Loading...">
</div>
   	<script>
    
        window.addEventListener("load", function(){
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
        })
        
    </script>