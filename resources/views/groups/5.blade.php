@extends('main')
@section('group')
    <div class="container page-top">
    <center><u><strong>조원 정보</strong></u></center>
    <br/>
    <center><table width="600px" border="1" cellpadding="5" cellspacing="0" >


      <tr>
        <th width="75px" bgcolor="lightgray">사진</th>
        <th><img src="gang.jpg" alt="" width="400px" height="300px"></th>
      </tr>
 	<tr>
 		<th width="75px" bgcolor="lightgray">성명</th>
     <th>전사빈</th>
 	</tr>

 	<tr>
 		<th width="75px" bgcolor="lightgray">자기소개</th>
 		<td colspan="3">
 		<pre style="word-wrap: break-word;white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-break:break-all;">
 저는 컴퓨터를 배우려고 들어오게 된 전사빈입니다.
 컴퓨터 게임 분야를 배우고싶어서 들어왔습니다.
 그런데 막상 들어와보니 제가 배우고 싶던 분야랑 다른것들이 많아 배우기는 힘들었지만 여러 부분을 접해봐서 좋았던것 같습니다.
 대학을 졸업하게되면 따로 음악을(bgm위주로) 만드는걸 배우거나 게임관련쪽을 공부 할 예정입니다.

 		</pre>
 		</td>
 	</tr>
 </table></center>
    <br/>
    <center><a href="member_list.html" title="조원 목록보기"><button  style="cursor:pointer">목록</button></a></center>

    </div>
@endsection
