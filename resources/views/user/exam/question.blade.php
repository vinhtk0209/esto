@foreach ($baithi as $bt)
<table class="table">
    <thead>
        <tr>
            <th>
                <h3 class="font-weight-500">Câu hỏi:<span>{{$bt->NOIDUNG}}</span></h3>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-left">
                <input type="radio" name="result" value="{{$bt->MABT}}_{{$bt->MACH}}_A" onclick="choosetheAnswer(this)" @if(count($ctbailam->where('MACH', $bt->MACH)->where('MABL', Session::get('takeExam'))->where('DAPAN', 'A')->get())>0)
                {{"checked"}}
                @endif>
                {{$bt->A}}
            </td>
        </tr>
        <tr>
            <td class="text-left">
                <input type="radio" name="result" value="{{$bt->MABT}}_{{$bt->MACH}}_B" onclick="choosetheAnswer(this)" @if(count($ctbailam->where('MACH', $bt->MACH)->where('MABL', Session::get('takeExam'))->where('DAPAN', 'B')->get())>0)
                {{"checked"}}
                @endif>
                {{$bt->B}}
            </td>
        </tr>
        <tr>
            <td class="text-left">
                <input type="radio" name="result" value="{{$bt->MABT}}_{{$bt->MACH}}_C" onclick="choosetheAnswer(this)" @if(count($ctbailam->where('MACH', $bt->MACH)->where('MABL', Session::get('takeExam'))->where('DAPAN', 'C')->get())>0)
                {{"checked"}}
                @endif>
                {{$bt->C}}
            </td>
        </tr>
        <tr>
            <td class="text-left">
                <input type="radio" name="result" value="{{$bt->MABT}}_{{$bt->MACH}}_D" onclick="choosetheAnswer(this)" @if(count($ctbailam->where('MACH', $bt->MACH)->where('MABL', Session::get('takeExam'))->where('DAPAN', 'D')->get())>0)
                {{"checked"}}
                @endif>
                {{$bt->D}}
            </td>
        </tr>
    </tbody>
</table>
@endforeach
<div class="pagination">
    <ul class="pagination justify-content-end mb-0" id="paginate">
        <li class="page-item">
            <a class="page-link text-decoration-none" href="exam/{{$baithi[0]->MABT}}/fetch_page?page=1">
                <i class="fas fa-angle-double-left"></i>
            </a>
        </li>
        @if ($baithi->currentPage() == 1)
        <li class="page-item disabled">
            @else
        <li class="page-item">
            @endif
            <a class="page-link text-decoration-none" href="{{$baithi->previousPageUrl()}}">
                <i class="fas fa-angle-left"></i>
            </a>
        </li>
        @if ($baithi->currentPage() == $baithi->lastPage())
        <li class="page-item disabled">
            @else
        <li class="page-item">
            @endif
            <a class="page-link text-decoration-none" href="{{$baithi->nextPageUrl()}}">
                <i class="fas fa-angle-right"></i>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link text-decoration-none" href="exam/{{$baithi[0]->MABT}}/fetch_page?page={{$baithi->lastPage()}}">
                <i class="fas fa-angle-double-right"></i>
            </a>
        </li>
    </ul>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">