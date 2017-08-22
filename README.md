# Pagination
Paginate list easily.

# How to use:

> `include "Paginate.php";`

> `$paginate = new inc\Pagination\Pagination(-a-,-b-);`

> `$paginate->pages(-c-);`

-a-(num) : The total num of pages.

-b-(String) : The url to go when you click the button.

-c-(num) : Current page.

# Extra:
  
  class function:
  *   setUrl
  *   setUrlSuf
  *   setPageNib(default 7)
  
setPageNib: You can set how many button to show;

  if setPageNib(1), except the current page(eg:10), [9],10,[11] would be shown.
  if setPageNib(3), except the current page(eg:10), [7,8,9],10,[11,12,13] would be shown.
  ...
