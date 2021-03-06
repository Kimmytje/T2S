@section('title')
    {{"Passen Op Je Dier | Contact"}}
@endsection

@extends('body')
@section('content')

  <main class="form">
    <section class="contact">
      <form action="#">
        <label for="customerName">NAME <em>&#x2a;</em></label>
        <input id="customerName" name="customerName" required="" type="text" />
        
        
        <label for="customerEmail">EMAIL <em>&#x2a;</em></label>
        <input id="customerEmail" name="customerEmail" required="" type="email" />
        
        
        <label for="customerPhone">PHONE</label>
        <input id="customerPhone" name="customerPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" />
        


        
        <label for="customerNote">YOUR MESSAGE <em>&#x2a;</em></label>
        <textarea id="customerNote" name="customerNote" required="" rows="4"></textarea>

        
        <label for="spamProtection">SPAM PROTECTION <em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;What day comes before July 11th?</span>
        </label><input id="spamProtection" name="spamProtection" type="text" />

        <button id="customerOrder">SUBMIT</button>
      </form>
    </section>
  </main>

@endsection