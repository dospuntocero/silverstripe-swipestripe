<% control Cart %>
<table id="checkout-order-table" class="table table-bordered">
  <thead>
    <tr>
      <th><% _t('CheckoutFormOrder.PRODUCT','Product') %></th>
      <th><% _t('CheckoutFormOrder.OPTIONS','Options') %></th>
      <th><% _t('CheckoutFormOrder.UNITPRICE','Unit Price') %> ($Total.Currency)</th>
      <th><% _t('CheckoutFormOrder.QUANTITY','Quantity') %></th>
      <th><% _t('CheckoutFormOrder.SUBTOTAL','Sub Total') %> ($Total.Currency)</th>
    </tr>
  </thead>
  <tbody>
  
    <% if Items %>
    
      <% control Top.Fields(Items) %>
	      $FieldHolder
	    <% end_control %>
	    
    <% else %>
      <tr>
        <td colspan="5">
          <div class="error"><% _t('CheckoutFormOrder.NOITEMSINYOURCART','There are no items in your cart.') %></div>
        </td>
      </tr>
    <% end_if %>
    
    <% control Top.Fields(SubTotalModifiers) %>
      $FieldHolder
    <% end_control %>
    
    <tr>
      <td colspan="4" class="row-header"><% _t('CheckoutFormOrder.SUBTOTAL','Sub Total') %></td>
      <td>$SubTotal.Nice ($SubTotal.Currency)</td>
    </tr>
    
    <% control Top.Fields(Modifiers) %>
      $FieldHolder
    <% end_control %>

    <tr>
      <td colspan="4" class="row-header"><% _t('CheckoutFormOrder.TOTAL','Total') %></td>
      <td>$Total.Nice ($Total.Currency)</td>
    </tr>
  </tbody>
</table>
<% end_control %>