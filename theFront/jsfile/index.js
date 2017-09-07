$(function(){
     
  //    $('#linkto').on('click', function (event) {
	 //    event.preventDefault();
	 //    history.replaceState(null, document.title, this.href.split('#')[0] + '#12313');
	 //    location.replace('');
	 // })
    var R = new Router();
    R.init();
    var res = document.querySelector('#showinfo');
    R.route('/',function(){
    	res.innerHTML = 'SAFASFDASKDFNLASFVNMAK';
    })
    R.route('/admin',function(){
    	res.innerHTML = 'SAFASFDASKDFNL社范德萨的发生大幅ASFVNMAK';
    })
    R.route('/product',function(){
    	// res.innerHTML = 'SAFASasfafafsafdafFDASKDFNLASFVNMAK';
    	$.get('http://localhost/php-demo/product/product_list.php',function(data){
            var data = JSON.parse(data);
            for(let item in data){
            	$('#showinfo').append(
                 `
                 <ul>
                    <li>${data[item].id}</li>
                 </ul>

                 `
                 )
            	data[item];
            }
    	})
    })
})
