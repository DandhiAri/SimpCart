@extends('layout/frontlayout')
@section('script')
<script>
  function toggle(source) {
  checkboxes = document.getElementsByName('check');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
@endsection
@section('style')
<style>
    .header{
      display : flex;
    }
    .actionremove{
      color:red;
    }
    img{
      display: block;
      width: 100%; 
    }
    .grid-cart{
      display : grid;
      grid-template-columns: 60% 40%;
      grid-column-gap: 20px;
    }
    .grid-child{
      border: 1px solid rgb(122, 118, 118);
      border-radius: 10px;
    }
    .grid-child.left{
      height: 300px;
    }
    .grid-child .right{
      height: 200px;
      padding-right: 1px;
    }
    #total{
      width: 3em;
    }
    #gam{
      width: 180px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    tr {
      border-bottom: 1pt solid lightgray;
    }
    .trflex{
      display: flex;
      width: 100%;
    }
    .trflex input{
      width: 100%;
    }
    .warnaicon{
      color: #526E2A;
    }
</style>
@endsection

@section('content')
<div class="w3-main" style="margin-left:250px">
    <header class="w3-container">
      <p class="w3-left w3-xlarge">Cart</p>
    </header>
  <div class="w3-container">
    <p class="w3-right actionremove">Remove all</p>
  </div>  
  <form action="" method="post">
    <div class="grid-cart">
      <div class="w3-container">
        <div class="grid-child right">
          <table>
            <td><input type="checkbox" onClick="toggle(this)"></td>
            <td>No</td>
            <td colspan="2" width="100px" style="ta">Produk</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Total Harga</td>
            <tr>
              <td><input type="checkbox" name="check"></td>
              <td>1</td>
              <td id="gam"><img src="big brain.jpg"></td>
              <td>TESTING</td>
              <td>69$</td>
              <td><input type="number" id="total" min="0" step="1" max="30"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="check"></td>
              <td>2</td>
              <td id="gam"><img src="big brain.jpg"></td>
              <td>TESTING</td>
              <td>42$</td>
              <td><input type="number" id="total" min="0" max="30"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="check"></td>
              <td>2</td>
              <td id="gam"><img src="big brain.jpg"></td>
              <td>TESTING</td>
              <td>42$</td>
              <td><input type="number" id="total" min="0" max="30"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="check"></td>
              <td>2</td>
              <td id="gam"><img src="big brain.jpg"></td>
              <td>TESTING</td>
              <td>42$</td>
              <td><input type="number" id="total" min="0" max="30"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="check"></td>
              <td>2</td>
              <td id="gam"><img src="big brain.jpg"></td>
              <td>TESTING</td>
              <td>42$</td>
              <td><input type="number" id="total" min="0" max="30"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="check"></td>
              <td>2</td>
              <td id="gam"><img src="big brain.jpg"></td>
              <td>TESTING</td>
              <td>42$</td>
              <td><input type="number" id="total" min="0" max="30"></td>
            </tr>
            <tr>
              <td><input type="checkbox" name="check"></td>
              <td>2</td>
              <td id="gam"><img src="big brain.jpg"></td>
              <td>TESTING</td>
              <td>42$</td>
              <td><input type="number" id="total" min="0" max="30"></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="grid-child left">
        <div class="w3-container">
          <div class="trflex">
            <b>Keterangan Belanja</b>
          </div>
          <hr>
          <div class="trflex">
            <p>Harga Semua Barang</p>
          </div>
          <div class="trflex">
            <p>Diskon barang</p>
          </div>
          <div class="trflex">
            <p>Total Belanja</p>
          </div>
          <hr>
          <div class="trflex">
            <input type="submit" value="Konfirmasi beli" name="">
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection

@section('js')
  <script>
    
  </script>
@endsection