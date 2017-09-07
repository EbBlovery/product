$(function(){
     
  //    $('#linkto').on('click', function (event) {
	 //    event.preventDefault();
	 //    history.replaceState(null, document.title, this.href.split('#')[0] + '#12313');
	 //    location.replace('');
	 // })
    var R = new Router();
    R.init();
    // var res = document.querySelector('#showinfo');
    R.route('/',function(){
    	$('#showinfo').html(`<p>SAFASFDASKDFNLASFVNMAK</p>`)
    })
    R.route('/admin',function(){
    	$('#showinfo').html(`<p>asdal;ff,a;a;gvmsld;vmkl;m;;skd;ms;lmm;lsmegsgm;某个时刻联盟商</p>`)
    })
    R.route('/product',function(){
    	// res.innerHTML = 'SAFASasfafafsafdafFDASKDFNLASFVNMAK';
    	$.get('http://localhost/php-demo/product/product_list.php',function(data){
            var data = JSON.parse(data);
            for(let item in data){
            	$('#showinfo table').append(
                 `
				   <tbody>
				     <tr>
				       <td>表格单元格</td>
				       <td>表格单元格</td>
				       <th>表格标题</th>
				       <th>表格标题</th>
				       <td>表格单元格</td>
				     </tr>
				     <tr>
				       <td>表格单元格</td>
				       <td>表格单元格</td>
				       <th>表格标题</th>
				       <th>表格标题</th>
				       <td>表格单元格</td>
				     </tr>
				     <tr>
				       <td>表格单元格</td>
				       <td>表格单元格</td>
				       <td>表格单元格</td>
				     </tr>
				     <tr>
				       <td>表格单元格</td>
				       <td>表格单元格</td>
				       <td>表格单元格</td>
				     </tr>
				   </tbody>
	              </table>
                 `
                 )
            }
    	})
    })
})
