<table class="table table-bordered">
  <thead>     
    <tr>
      <th><% _t('OrderPayments.PAYMENT','Payment') %></th>
      <th><% _t('OrderPayments.DATE','Date') %></th>
      <th><% _t('OrderPayments.AMOUNT','Amount') %></th>
      <th><% _t('OrderPayments.PAYMENTSTATUS','Payment Status') %></th>
    </tr>
  </thead>
  <tbody>
    <% control Payments %>  
      <tr>
        <td>$PaymentMethod</td>
        <td>$LastEdited.Nice24</td>
        <td>$Amount.Nice $Currency</td>
        <td>$Status</td>
      </tr>
    <% end_control %>
  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
    <tr>
      <th><% _t('OrderPayments.TOTALOUTSTANDING','Total outstanding') %></th>
      <th>$TotalOutstanding.Nice</th>
    </tr>
  </tbody>
</table>