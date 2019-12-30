# Pagination
Manage the pagination of list easily.

## How to use

```
include "Paginate.php";

$pagination = new lifanko\Pagination($total, $pageSize, $url);
$pagination->pages($page);

------------------------------------------------------
 
$total   : number - The total number of list.
$pageSize: string - The item number of each page.
$url     : number - Url of buttons.
$page    : number - Figure out which page to show.
```

## Example

```
$pagination = new lifanko\Pagination(110, 20, 'index.php?page=');
$pagination->pages(4);
```

Output:

```
<li><a href='index.php?page=1'>1</a></li>
<li><a href='index.php?page=2'>2</a></li>
<li><a href='index.php?page=3'>3</a></li>
<li><a style='color: #f40' href='index.php?page=4'><b>4</b></a></li>
<li><a href='index.php?page=5'>5</a></li>
<li><a href='index.php?page=6'>6</a></li>
```

## Other Functions

 + setUrl
 + setUrlSuf
 + setPageNib(default 7)