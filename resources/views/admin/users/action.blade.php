<div>
    <div class="btn-group dropdown">
        <button class="btn btn-primary btn-xs dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Action
        </button>
        <ul class="dropdown-menu" role="menu">
          <li>
            <a class="dropdown-item" href="{{route('users.edit',$id)}}"><i class="fa fa-edit"></i> Edit</a>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" onclick="delete_article({{ $id }})"
                    type="button"><i class="fa fa-trash"></i> Delete</button>
          </li>
        </ul>
      </div>
</div>
