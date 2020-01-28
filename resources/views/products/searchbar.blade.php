<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="pull-right" width='200px'>
        <input type="text" class="myform-control" name="search"
            >
            <button type="submit" class="btn btn-default pull-right">
                Search
            </button>
        </span>
    </div>
</form>