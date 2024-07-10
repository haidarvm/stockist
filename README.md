- bug if stock less than actual stock than alert 
- Add current stock on choose auto complete item (add current stock in query)
- Style on autocomplate should be red 
- php back url before
# chart using highcharts stock line `progress`
- for dashboard use https://apexcharts.com/

# Task List
- chart gabungan stock in stock out monthly [https://jsfiddle.net/fdt9t2yr/1/] `1`
- add current stock on update stock `2` 
- aleft if stock approach to on input stock `3`
- Tampilan ramah tablet 10 inch (install to apk) ... `progress` `4` 
- multiple item on report, chart [https://codepen.io/pilotvijai/pen/KjEyyG] `5`
- deletion stock in / out
- transaction commit, rollback on insert, edit, delete stock in / out
- Tab: stock in, stock out, multiple in, multiple out
- Stock alert if threshold config / kurang dari 5pcs
- Pas menu update stock ada info: qty dan location. Sekalian alert kalau qty kurang dari 5pcs
- menu active by url
- Item Image upload

# new task for deletion stock in / out
if delete stock in  
table stock decrement qty from stock in by stock_id
if delete stock out
table stock increment qty from stock out by stock_id

# **done**
- aleft if stock less than 5 put on top menu **done**
- Input Multiple Stock **done**
- Home menu with big cards button **done**
- bug stock all filter date **done**
- Report ramah print/pdf (with headerfilename & title )... **done**
- export files... **done**
- Report Filter with product only **done**
- bug if date empty **done**
- Add All date in report / chart ,,, **done**
- Design Filter Date **done**
- chart with export plugin **done**
- chart stock  **done**
- chart stock in **done**
- chart stock out **done**
- bug shorting date on stock should use update_at ... **done** still bug should repair JS datatable add moment js datetime
- bugs on script.js if no datepicker ... **done**
- change logo **done**
- Menu update stock:  **done**
- Login Authentication  admin, operator ... **done**
- Rubah/Update table tambah kolom lokasi rak ... **done**
- detail nama barang + lokasi rak ... **done**
- report with date from to ... **done** 
- Master CRUD employee ... **done**
- Master CRUD ITEM  ... **done**
- Custom report ada features filter ... **done**
- add Description / Keterangan .. **done**
- add desc .. **done**

# Bug
- on stock filter by date not work ... **done**
# EDIT STOCK IN / OUT Task **done**
- kalau edit di stock maka list semua stok in & out per item itu
- kalau edit stock in / out maka update lalu update juga di table stok cara nya :
    stock in 20 (edit jadi 18)
    stock out 5 (edit jadi 3)
    maka stock = 15
    # if edit Stock out
    -5 + -3
    decrement dulu value sebelum nya lalu decrement value baru

    # if edit Stock in
    decrement dulu value sebelum nya lalu increment value baru


return $this->where($item)->increment('quantity', $quantity);

# android kotlin webview
https://camposha.info/android-examples/android-webview/#gsc.tab=0

# sample playground autocomplete
https://codepen.io/tarekraafat/embed/rQopdW?height=265&theme-id=dark&default-tab=js,result#result-box

# Multiple Auto select example
https://jsfiddle.net/tarekraafat/6p5j4Lzh/2/
https://github.com/TarekRaafat/autoComplete.js/issues/82