<!DOCTYPE html>
<html>
<head>
    <title>Relatório do Projeto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .status {
            font-weight: bold;
        }
        div{
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="justify-content-center" style="width: 80px;">
        {{-- outras classes são do tailwind.css --}}
        <x-application-logo class="block h-9 w-auto fill-current bg-pistachio" />
    </div>
    <div style="display: flex; justify-content: center;text-align: center">
        <h3 >I - EVALUATION OF ADMINISTRATIVE PERFORMANCE</h3>
    </div>
    <div class="row" style="display: flex;">
        <label style="margin-right: 10px;"><b>Referência:</b></label>
        <label class="">{{ $relatorio->refProjecto }}</label>
    </div>
    <div class="row">
        <label class="col-8" ><b>Descrição:</b></label>
        <label class="col-4">{{ $relatorio->descricao }}</label>
    </div>
    <div class="row">
        <label class="col-8"><b>Tipo de relatório</b></label>
        <label class="col-4">{{ $relatorio->relatorio }}</label>
    </div>
    
    <div style="display: flex; justify-content: center;text-align: center">
        <h4>1 - Safeguards Documents Required under the Contractor Contract</h4>
    </div>
    <hr>
    <div class="row">
        <label style="margin-right: 10vw;">ESMP and HSP printed and available on site</label>
        <label class="col-4">{{ $relatorio->printedSite }} - <span class="status">{{ $relatorio->printedSiteStatus }}</span></label>
    </div>
    <div class="row">
        <label style="width: 1000px;">Code of Conduct posted at the Yard</label>
        <label class="col-4">{{ $relatorio->codeConduct }} - <span class="status">{{ $relatorio->codeConductStatus }}</span></label>
    </div>
    <div class="row">
        <label style="width: 1000px;">ESMP and HSP update on site</label>
        <label class="col-4">{{ $relatorio->updateSite }} - <span class="status">{{ $relatorio->updateSiteStatus }}</span></label>
    </div>
    <div class="row">
        <label style="width: 1000px;">Communication to the Ministry of Labor</label>
        <label class="col-4">{{ $relatorio->number }} - <span class="status">{{ $relatorio->numberStatus }}</span></label>
    </div>
    <div class="row">
        <label style="width: 1000px;">Construction Work schedule</label>
        <label class="col-4">{{ $relatorio->schedule }} - <span class="status">{{ $relatorio->scheduleStatus }}</span></label>
    </div>
    <div class="row">
        <label class="col-8">Organizational chart</label>
        <label class="col-4">{{ $relatorio->chartOrgan }} - <span class="status">{{ $relatorio->chartOrganStatus }}</span></label>
    </div>
    <div class="row">
        <label class="col-8">Method Statement for activities</label>
        <label class="col-4">{{ $relatorio->totalSub }} - <span class="status">{{ $relatorio->totalSubStatus }}</span></label>
    </div>
    <div style="display: flex; justify-content: center;text-align: center"><h4>2 - Monthly Report Delivery</h4></div>
    <hr>
    <div class="row">
        <label class="col-8">Delivery by the 3rd of the following month</label>
        <label class="col-4"><small>(to contract specifications)</small> {{ $relatorio->delivery }} - <span class="status">{{ $relatorio->deliveryStatus }}</span></label>
    </div>
    <div class="row">
        <label class="col-8">Report according to requested topics</label>
        <label class="col-4">{{ $relatorio->report }} - <span class="status">{{ $relatorio->reportStatus }}</span></label>
    </div>
    <div class="row">
        <label class="col-8">Analytical and constructive report</label>
        <label class="col-4">{{ $relatorio->analytical }} - <span class="status">{{ $relatorio->analyticalStatus }}</span></label>
    </div>
    <div class="row">
        <label class="col-8">Sub total</label>
        <label class="col-4">{{ $relatorio->totalSub1 }} - <span class="status">{{ $relatorio->totalSub1Status }}</span></label>
    </div>
</body>
</html>
