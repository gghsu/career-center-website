<div class="container">
<table border="2">
　<tr>
　<td>序號</td>
　<td>標題</td>
  <td>公告日期</td>
  <td>點閱率</td>
  <td>公告人</td>
  <td>編輯</td>
  <td>刪除</td>
　</tr>
	@foreach ($slideshows as $slideshows)
	  <tr>
	  <td>{{ $slideshows->id }}</td>
	　<td>{{ $slideshows->title }}</td>
	  <td>{{ $slideshows->created_at }}</td>
	  <td> </td>
	  <td> </td>
	  <td>編輯</td>
	  <td>
	  	刪除
	  </td>
	  </tr>     
    @endforeach
</div>