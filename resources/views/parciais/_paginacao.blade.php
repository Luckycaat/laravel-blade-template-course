<nav aria-label="Page navigation example" style="margin-top: 50px;">
    <ul class="pagination pagination-lg">
        @for ($i = 1; $i < 10; $i++)
            <li class="page-item"><a href="#" class="page-link">{{ $i }}</a></li>
        @endfor
    </ul>
</nav>
