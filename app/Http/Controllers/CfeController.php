<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CfeController extends Controller
{
   public function __construct()
   {
       $this->assinaturaSat = '';
       $this->versaoSat = '0.07';
   }

    public function geraXml(Request $request)
    {

        $xml = `<?xml version="1.0" encoding="UTF-8"?><CFe>
        <infCFe versaoDadosEnt="`.$this->versaoSat.`">
           <ide>
              <CNPJ>`.$request->cnpj.`</CNPJ>
              <signAC>`.$this->assinaturaSat.`</signAC>
              <numeroCaixa>`.$request->numeroCaixa.`</numeroCaixa>
           </ide>
           <emit>
              <CNPJ>08238299000129</CNPJ>
              <IE>149392863111</IE>
              <indRatISSQN>N</indRatISSQN>
           </emit>
           <dest>
           </dest>
           <det nItem="1">
              <prod>
                 <cProd>2</cProd>
                 <xProd>B07 G.A. DT CLEAN</xProd>
                 <NCM>27101259</NCM>
                 <CFOP>5656</CFOP>
                 <uCom>LT</uCom>
                 <qCom>2.2100</qCom>
                 <vUnCom>5.799</vUnCom>
                 <indRegra>T</indRegra>
                 <obsFiscoDet xCampoDet="Cod. Produto ANP">
                    <xTextoDet>320102002</xTextoDet>
                 </obsFiscoDet>
              </prod>
              <imposto>
                 <vItem12741>4.93</vItem12741>
                 <ICMS>
                    <ICMS40>
                       <Orig>0</Orig>
                       <CST>60</CST>
                    </ICMS40>
                 </ICMS>
                 <PIS>
                    <PISNT>
                       <CST>04</CST>
                    </PISNT>
                 </PIS>
                 <COFINS>
                    <COFINSNT>
                       <CST>04</CST>
                    </COFINSNT>
                 </COFINS>
              </imposto>
           </det>
           <total>
              <vCFeLei12741>4.93</vCFeLei12741>
           </total>
           <pgto>
              <MP>
                 <cMP>01</cMP>
                 <vMP>12.81</vMP>
              </MP>
           </pgto>
           <infAdic>
              <infCpl>`.$request->infCpl.`</infCpl>
           </infAdic>
        </infCFe>
     </CFe>`;
    }
}
