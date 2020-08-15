<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 PDF Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">

    <h2>Generate PDF in Codeigniter from View</h2>

    <div class="d-flex flex-row-reverse bd-highlight">
      <a href="<?php echo base_url('PdfController/htmlToPDF') ?>" class="btn btn-primary">
        Download PDF
      </a>
    </div>

    <table class="table table-striped table-hover mt-4">
      <thead>
        <tr>
          <th>Name</th>
          <th>Profile</th>
          <th>City</th>
          <th>Date</th>
          <th>CTC</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Airi Satou</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>33</td>
          <td>2008/11/28</td>
          <td>$162,700</td>
        </tr>
        <tr>
          <td>Angelica Ramos</td>
          <td>Chief Executive Officer (CEO)</td>
          <td>London</td>
          <td>47</td>
          <td>2009/10/09</td>
          <td>$1,200,000</td>
        </tr>
        <tr>
          <td>Ashton Cox</td>
          <td>Junior Technical Author</td>
          <td>San Francisco</td>
          <td>66</td>
          <td>2009/01/12</td>
          <td>$86,000</td>
        </tr>
        <tr>
          <td>Bradley Greer</td>
          <td>Software Engineer</td>
          <td>London</td>
          <td>41</td>
          <td>2012/10/13</td>
          <td>$132,000</td>
        </tr>
        <tr>
          <td>Brenden Wagner</td>
          <td>Software Engineer</td>
          <td>San Francisco</td>
          <td>28</td>
          <td>2011/06/07</td>
          <td>$206,850</td>
        </tr>
        <tr>
          <td>Brielle Williamson</td>
          <td>Integration Specialist</td>
          <td>New York</td>
          <td>61</td>
          <td>2012/12/02</td>
          <td>$372,000</td>
        </tr>
        <tr>
          <td>Bruno Nash</td>
          <td>Software Engineer</td>
          <td>London</td>
          <td>38</td>
          <td>2011/05/03</td>
          <td>$163,500</td>
        </tr>
        <tr>
          <td>Caesar Vance</td>
          <td>Pre-Sales Support</td>
          <td>New York</td>
          <td>21</td>
          <td>2011/12/12</td>
          <td>$106,450</td>
        </tr>
        <tr>
          <td>Cara Stevens</td>
          <td>Sales Assistant</td>
          <td>New York</td>
          <td>46</td>
          <td>2011/12/06</td>
          <td>$145,600</td>
        </tr>
        <tr>
          <td>Cedric Kelly</td>
          <td>Senior Javascript Developer</td>
          <td>Edinburgh</td>
          <td>22</td>
          <td>2012/03/29</td>
          <td>$433,060</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>