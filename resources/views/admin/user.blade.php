<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blade模板引擎</title>
</head>
<body>
<h2><?php echo $name; ?></h2>
<h2>{{$name}}</h2>
<h2>{!! $name !!}</h2>
<h2>{{date('Y-m-d H:i:s',time())}}</h2>
<h2>{{ isset($age) ? $age : 'default'}}</h2>
<h2>{{ $age or 'default'}}</h2>
    @if($scroe > 80)
    <p>优秀</p>
    @endif
    @if($scroe > 90)
        <p>完美</p>
    @else
    <p>一般般</p>
    @endif

    @if($scroe > 90)
        <p>完美</p>
    @elseif($scroe > 80)
        <p>优秀</p>
    @elseif($scroe > 70)
        <p>及格</p>
    @else
    <p>不及格</p>
    @endif
@unless(false)
    <p>这是p标签</p>
    @endunless

@for($i = 0; $i < 5 ;$i++)
    @break($i == 3)
    <p>第{{$i}}次的输出</p>
    @endfor
@foreach($stu as $v)
    <p>{{$v['name']}}</p>
    <p>{{$loop->index}}</p>
    @endforeach
@while($i < 10)
    <p>第{{$i++}}次循环</p>
    @endwhile
@forelse($student as $v)
    <p>{{$v['name']}}</p>
    @empty
<p>暂无数据显示</p>
    @endforelse
</body>
</html>