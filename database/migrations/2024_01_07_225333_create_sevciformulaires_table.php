<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sevciformulaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            // tableau2
            // $table->integer('tab2pansement')->nullable();
            // $table->integer('tab2injection')->nullable();
            // $table->integer('tab2perfusionion')->nullable();
            // $table->integer('tab2transfuionsanguine')->nullable();
            // $table->integer('tab2miseobservation')->nullable();
            // $table->integer('tab2autresoins')->nullable();
            // $table->integer('tab2ptitechicircomasc')->nullable();
            // $table->integer('tab2ptitechisutureplaie')->nullable();
            // $table->integer('tab2ptitechiabces')->nullable();
            // $table->integer('tab2autreptitechi')->nullable();

            // // tableau3
            // $table->integer('tab3cpn1trimestre1')->nullable();
            // $table->integer('tab3cpn1autretrimestre')->nullable();
            // $table->integer('cpn2')->nullable();
            // $table->integer('cpn3')->nullable();
            // $table->integer('cpn49moisgrossesse')->nullable();
            // $table->integer('cp4autretrimestre')->nullable();
            // $table->integer('cpn5+')->nullable();
            // // tableau4
            // $table->integer('tab4grossesserisqcpn1')->nullable();
            // $table->integer('tab4femalnutrie')->nullable();
            // $table->integer('tab4feanemie')->nullable();
            // $table->integer('tab4fesyphilis')->nullable();
            // $table->integer('tab4feaghbs')->nullable();
            // // tableau5
            // $table->integer('tab5sp1')->nullable();
            // $table->integer('tab5sp2')->nullable();
            // $table->integer('tab5sp3')->nullable();
            // $table->integer('tab5sp4')->nullable();
            // $table->integer('tab5sp5+')->nullable();
            // $table->integer('tab4fecpnmilda')->nullable();
            // $table->integer('tab4fecpnferfolate')->nullable();
            // $table->integer('tab4fecpndeparasite')->nullable();
            // $table->integer('tabpfppi')->nullable();
            // // tableau6
            // $table->integer('tab6acchtetablissement814')->nullable();
            // $table->integer('tab6acchtetablissement1519')->nullable();
            // $table->integer('tab6acchtetablissement2024')->nullable();
            // $table->integer('tab6acchtetablissement2549')->nullable();
            // $table->integer('tab6acchtetablissement50+')->nullable();

            // $table->integer('tab6acchtdomicile814')->nullable();
            // $table->integer('tab6acchtdomicile1519')->nullable();
            // $table->integer('tab6acchtdomicile2024')->nullable();
            // $table->integer('tab6acchtdomicile2549')->nullable();
            // $table->integer('tab6acchtdomicile50+')->nullable();

            // $table->integer('tab6refereout814')->nullable();
            // $table->integer('tab6refereout1519')->nullable();
            // $table->integer('tab6refereout2024')->nullable();
            // $table->integer('tab6refereout2549')->nullable();
            // $table->integer('tab6refereout50+')->nullable();

            // // tableau7
            // $table->integer('tab7fvaccinecorrect')->nullable();
            // $table->integer('tab7fnonvaccinecorrect')->nullable();
            // $table->integer('tab7fnonvaccine')->nullable();

            // // tableau 8
            // $table->integer('tab8naissancevivante')->nullable();
            // $table->integer('tab8mortnéefrais')->nullable();
            // $table->integer('ab8mortnémacéré')->nullable();
            // $table->integer('tab8ne<2500g')->nullable();
            // $table->integer('tab8premature')->nullable();
            // $table->integer('tab8nvoprotegetetanos')->nullable();
            // $table->integer('tab8acchtmultiple')->nullable();
            // $table->integer('tab8avortementspontane')->nullable();
            // $table->integer('tab8avortementprovoque')->nullable();

            // // tableau 9
            // $table->integer('tab9evacuationmereavant')->nullable();
            // $table->integer('tab9evacuationmereapres')->nullable();
            // $table->integer('tab9evacuationnvoné')->nullable();
            // $table->integer('tab9nbrfemmeCO')->nullable();
            // $table->integer('tab9nbrfemmeCOrefereout')->nullable();

            // // tableau 10a
            // $table->integer('tab10anbrenftfichedeclaréM')->nullable();
            // $table->integer('tab10anbrenftfichedeclaréF')->nullable();
            // $table->integer('tab10anbrenftinfonecessaireM')->nullable();
            // $table->integer('tab10anbrenftinfonecessaireF')->nullable();

            // // tableau10b
            // $table->integer('tab10bcponimmediat')->nullable();
            // $table->integer('tab10bcpon610')->nullable();
            // $table->integer('tab10bcponautreperiode')->nullable();
            // $table->integer('tab10bcpon')->nullable();

            // // tableau11A
            // $table->integer('tab11Aenftpev05')->nullable();
            // $table->integer('tab11Aenftpev611')->nullable();
            // $table->integer('tab11Amilda05')->nullable();
            // $table->integer('tab11Amilda611')->nullable();
            // $table->integer('tab11Aenfteligiblemilda')->nullable();
            // $table->integer('tab11Aenftmildarecu')->nullable();

            // // tableau 11b
            // $table->integer('tab11benftsansacteM')->nullable();
            // $table->integer('tab11benftsansacteF')->nullable();
            // $table->integer('tab11benftsansfichedeclareM')->nullable();
            // $table->integer('tab11benftsansfichedeclareF')->nullable();
            // $table->integer('tab11benftsansfichedeclareattributM')->nullable();
            // $table->integer('tab11benftsansfichedeclareattributF')->nullable();
            // tableau14
            // $table->integer('tab14clientsconseilles04M')->nullable();
            // $table->integer('tab14clientsconseilles04F')->nullable();
            // $table->integer('tab14clientsconseilles59M')->nullable();
            // $table->integer('tab14clientsconseilles59F')->nullable();          
            // $table->integer('tab14clientsconseilles1014M')->nullable();
            // $table->integer('tab14clientsconseilles1014F')->nullable();
            // $table->integer('tab14clientsconseilles1519M')->nullable();
            // $table->integer('tab14clientsconseilles1519F')->nullable();
            // $table->integer('tab14clientsconseilles2024M')->nullable();
            // $table->integer('tab14clientsconseilles2024F')->nullable();          
            // $table->integer('tab14clientsconseilles2549M')->nullable();
            // $table->integer('tab14clientsconseilles2549F')->nullable();
            // $table->integer('tab14clientsconseilles50+M')->nullable();
            // $table->integer('tab14clientsconseilles50+F')->nullable();
            
            // $table->integer('tab14conseilledepisteresultat04M')->nullable();
            // $table->integer('tab14conseilledepisteresultat04F')->nullable();
            // $table->integer('tab14conseilledepisteresultat59M')->nullable();
            // $table->integer('tab14conseilledepisteresultat59F')->nullable();          
            // $table->integer('tab14conseilledepisteresultat1014M')->nullable();
            // $table->integer('tab14conseilledepisteresultat1014F')->nullable();
            // $table->integer('tab14conseilledepisteresultat1519M')->nullable();
            // $table->integer('tab14conseilledepisteresultat1519F')->nullable();
            // $table->integer('tab14conseilledepisteresultat2024M')->nullable();
            // $table->integer('tab14conseilledepisteresultat2024F')->nullable();          
            // $table->integer('tab14conseilledepisteresultat2549M')->nullable();
            // $table->integer('tab14conseilledepisteresultat2549F')->nullable();
            // $table->integer('tab14conseilledepisteresultat50+M')->nullable();
            // $table->integer('tab14conseilledepisteresultat50+F')->nullable();

            // $table->integer('tab14depistepositif04M')->nullable();
            // $table->integer('tab14depistepositif04F')->nullable();
            // $table->integer('tab14depistepositif59M')->nullable();
            // $table->integer('tab14depistepositif59F')->nullable();          
            // $table->integer('tab14depistepositif1014M')->nullable();
            // $table->integer('tab14depistepositif1014F')->nullable();
            // $table->integer('tab14depistepositif1519M')->nullable();
            // $table->integer('tab14depistepositif1519F')->nullable();
            // $table->integer('tab14depistepositif2024M')->nullable();
            // $table->integer('tab14depistepositif2024F')->nullable();          
            // $table->integer('tab14depistepositif2549M')->nullable();
            // $table->integer('tab14depistepositif2549F')->nullable();
            // $table->integer('tab14depistepositif50+M')->nullable();
            // $table->integer('tab14depistepositif50+F')->nullable();

            // $table->integer('tab14depisteautotest04M')->nullable();
            // $table->integer('tab14depisteautotest04F')->nullable();
            // $table->integer('tab14depisteautotest59M')->nullable();
            // $table->integer('tab14depisteautotest59F')->nullable();          
            // $table->integer('tab14depisteautotest1014M')->nullable();
            // $table->integer('tab14depisteautotest1014F')->nullable();
            // $table->integer('tab14depisteautotest1519M')->nullable();
            // $table->integer('tab14depisteautotest1519F')->nullable();
            // $table->integer('tab14depisteautotest2024M')->nullable();
            // $table->integer('tab14depisteautotest2024F')->nullable();          
            // $table->integer('tab14depisteautotest2549M')->nullable();
            // $table->integer('tab14depisteautotest2549F')->nullable();
            // $table->integer('tab14depisteautotest50+M')->nullable();
            // $table->integer('tab14depisteautotest50+F')->nullable();

            // $table->integer('tab14depisteautotestpositif04M')->nullable();
            // $table->integer('tab14depisteautotestpositif04F')->nullable();
            // $table->integer('tab14depisteautotestpositif59M')->nullable();
            // $table->integer('tab14depisteautotestpositif59F')->nullable();          
            // $table->integer('tab14depisteautotestpositif1014M')->nullable();
            // $table->integer('tab14depisteautotestpositif1014F')->nullable();
            // $table->integer('tab14depisteautotestpositif1519M')->nullable();
            // $table->integer('tab14depisteautotestpositif1519F')->nullable();
            // $table->integer('tab14depisteautotestpositif2024M')->nullable();
            // $table->integer('tab14depisteautotestpositif2024F')->nullable();          
            // $table->integer('tab14depisteautotestpositif2549M')->nullable();
            // $table->integer('tab14depisteautotestpositif2549F')->nullable();
            // $table->integer('tab14depisteautotestpositif50+M')->nullable();
            // $table->integer('tab14depisteautotestpositif50+F')->nullable();

            // $table->integer('tab14retesting04M')->nullable();
            // $table->integer('tab14retesting04F')->nullable();
            // $table->integer('tab14retesting59M')->nullable();
            // $table->integer('tab14retesting59F')->nullable();          
            // $table->integer('tab14retesting1014M')->nullable();
            // $table->integer('tab14retesting1014F')->nullable();
            // $table->integer('tab14retesting1519M')->nullable();
            // $table->integer('tab14retesting1519F')->nullable();
            // $table->integer('tab14retesting2024M')->nullable();
            // $table->integer('tab14retesting2024F')->nullable();          
            // $table->integer('tab14retesting2549M')->nullable();
            // $table->integer('tab14retesting2549F')->nullable();
            // $table->integer('tab14retesting50+M')->nullable();
            // $table->integer('tab14retesting50+F')->nullable();

            // // tableau15
            // $table->integer('tab15clientsconseillesTS')->nullable();
            // $table->integer('tab15clientsconseillesUD')->nullable();
            // $table->integer('tab15clientsconseillesHSH')->nullable();

            // $table->integer('tab15conseilledepisteresultatTS')->nullable();
            // $table->integer('tab15conseilledepisteresultatUD')->nullable();
            // $table->integer('tab15conseilledepisteresultatHSH')->nullable();

            // $table->integer('tab15depistepositifTS')->nullable();
            // $table->integer('tab15depistepositifUD')->nullable();
            // $table->integer('tab15depistepositifHSH')->nullable();

            // //tableau 16
            // $table->integer('tab16istdepistevih1014M')->nullable();
            // $table->integer('tab16istdepistevih1014F')->nullable();
            // $table->integer('tab16istdepistevih1519M')->nullable();
            // $table->integer('tab16istdepistevih1519F')->nullable();          
            // $table->integer('tab16istdepistevih2024M')->nullable();
            // $table->integer('tab16istdepistevih2024F')->nullable();
            // $table->integer('tab16istdepistevih2549M')->nullable();
            // $table->integer('tab16istdepistevih2549F')->nullable();
            // $table->integer('tab16istdepistevih50+M')->nullable();
            // $table->integer('tab16istdepistevih50+F')->nullable(); 

            // $table->integer('tab16istdepistepositif1014M')->nullable();
            // $table->integer('tab16istdepistepositif1014F')->nullable();
            // $table->integer('tab16istdepistepositif1519M')->nullable();
            // $table->integer('tab16istdepistepositif1519F')->nullable();          
            // $table->integer('tab16istdepistepositif2024M')->nullable();
            // $table->integer('tab16istdepistepositif2024F')->nullable();
            // $table->integer('tab16istdepistepositif2549M')->nullable();
            // $table->integer('tab16istdepistepositif2549F')->nullable();
            // $table->integer('tab16istdepistepositif50+M')->nullable();
            // $table->integer('tab16istdepistepositif50+F')->nullable();

            // // tableau 17
            // $table->integer('tab17fecpn1positif')->nullable();
            // $table->integer('tab17fecpn1traitement')->nullable();
            // $table->integer('tab17feconseillestestesresultat')->nullable();
            // $table->integer('tab17featesteresultatcpn')->nullable();
            // $table->integer('tab17featesteresultatmaternite')->nullable();          
            // $table->integer('tab17featesteresultatcpon')->nullable();
            // $table->integer('tab17feretestingcpn')->nullable();
            // $table->integer('tab17feretestingmaternite')->nullable();
            // $table->integer('tab17feretestingmacpon')->nullable();
            // $table->integer('tab17feapositifcpn')->nullable();
            // $table->integer('tab17feapositifmaternite')->nullable();
            // $table->integer('tab17feapositifcpon')->nullable();
            // $table->integer('tab17featraitementcpn')->nullable();
            // $table->integer('tab17featraitementmaternite')->nullable();
            // $table->integer('tab17featraitementcpon')->nullable();
            // $table->integer('tab17feacv<1000copies')->nullable();

            // // tableau 18
            // $table->integer('tab18positifacchtenregistre')->nullable();
            // $table->integer('tab18vivantmerepositive')->nullable();
            // $table->integer('tab18arvrecu72h')->nullable();
            // $table->integer('tab18cotrim')->nullable();    
            
            // // tableau 19
            // $table->integer('tab19nemereprecoce2')->nullable();
            // $table->integer('tab19nemereprecoce29')->nullable();
            // $table->integer('tab19nemeretardif1018')->nullable();
            // $table->integer('tab19nemerenftpositif')->nullable();
            // $table->integer('tab19nmerepositiftraitement')->nullable();
            // $table->integer('tab19transfereout')->nullable();

            // // tableau 20
            // $table->integer('tab20041M')->nullable();
            // $table->integer('tab20042M')->nullable();
            // $table->integer('tab20043M')->nullable();
            // $table->integer('tab20044M')->nullable();

            // $table->integer('tab20591M')->nullable();
            // $table->integer('tab20592M')->nullable();
            // $table->integer('tab20593M')->nullable();
            // $table->integer('tab20594M')->nullable();

            // $table->integer('tab2010141M')->nullable();
            // $table->integer('tab2010142M')->nullable();
            // $table->integer('tab2010143M')->nullable();
            // $table->integer('tab2010144M')->nullable();

            // $table->integer('tab20115191M')->nullable();
            // $table->integer('tab20115192M')->nullable();
            // $table->integer('tab20115193M')->nullable();
            // $table->integer('tab20115194M')->nullable();

            // $table->integer('tab2020241M')->nullable();
            // $table->integer('tab2020242M')->nullable();
            // $table->integer('tab2020243M')->nullable();
            // $table->integer('tab2020244M')->nullable();

            // $table->integer('tab2025491M')->nullable();
            // $table->integer('tab2025492M')->nullable();
            // $table->integer('tab2025493M')->nullable();
            // $table->integer('tab2025494M')->nullable();

            // $table->integer('tab2050+1M')->nullable();
            // $table->integer('tab2050+2M')->nullable();
            // $table->integer('tab2050+3M')->nullable();
            // $table->integer('tab2050+4M')->nullable();

            // $table->integer('tab20041F')->nullable();
            // $table->integer('tab20042F')->nullable();
            // $table->integer('tab20043F')->nullable();
            // $table->integer('tab20044F')->nullable();

            // $table->integer('tab20591F')->nullable();
            // $table->integer('tab20592F')->nullable();
            // $table->integer('tab20593F')->nullable();
            // $table->integer('tab20594F')->nullable();

            // $table->integer('tab2010141F')->nullable();
            // $table->integer('tab2010142F')->nullable();
            // $table->integer('tab2010143F')->nullable();
            // $table->integer('tab2010144F')->nullable();

            // $table->integer('tab2015191F')->nullable();
            // $table->integer('tab2015192F')->nullable();
            // $table->integer('tab2015193F')->nullable();
            // $table->integer('tab2015194F')->nullable();

            // $table->integer('tab2020241F')->nullable();
            // $table->integer('tab2020242F')->nullable();
            // $table->integer('tab2020243F')->nullable();
            // $table->integer('tab2020244F')->nullable();

            // $table->integer('tab2025491F')->nullable();
            // $table->integer('tab2025492F')->nullable();
            // $table->integer('tab2025493F')->nullable();
            // $table->integer('tab2025494F')->nullable();

            // $table->integer('tab2050+1F')->nullable();
            // $table->integer('tab2050+2F')->nullable();
            // $table->integer('tab2050+3F')->nullable();
            // $table->integer('tab2050+4F')->nullable();

            // $table->integer('tab2011FE')->nullable();
            // $table->integer('tab2012FE')->nullable();
            // $table->integer('tab2013FE')->nullable();
            // $table->integer('tab2014FE')->nullable();

            // $table->integer('tab2011FA')->nullable();
            // $table->integer('tab2012FA')->nullable();
            // $table->integer('tab2013FA')->nullable();
            // $table->integer('tab2014FA')->nullable();

            // // tableau 21a
            // $table->integer('tab21a041M')->nullable();
            // $table->integer('tab21a042M')->nullable();
            // $table->integer('tab21a043M')->nullable();
            // $table->integer('tab21a044M')->nullable();

            // $table->integer('tab21a591M')->nullable();
            // $table->integer('tab21a592M')->nullable();
            // $table->integer('tab21a593M')->nullable();
            // $table->integer('tab21a594M')->nullable();

            // $table->integer('tab21a10141M')->nullable();
            // $table->integer('tab21a10142M')->nullable();
            // $table->integer('tab21a10143M')->nullable();
            // $table->integer('tab21a10144M')->nullable();

            // $table->integer('tab21a15191M')->nullable();
            // $table->integer('tab21a15192M')->nullable();
            // $table->integer('tab21a15193M')->nullable();
            // $table->integer('tab21a15194M')->nullable();

            // $table->integer('tab21a20241M')->nullable();
            // $table->integer('tab21a20242M')->nullable();
            // $table->integer('tab21a20243M')->nullable();
            // $table->integer('tab21a20244M')->nullable();

            // $table->integer('tab21a25491M')->nullable();
            // $table->integer('tab21a25492M')->nullable();
            // $table->integer('tab21a25493M')->nullable();
            // $table->integer('tab21a25494M')->nullable();

            // $table->integer('tab21a50+1M')->nullable();
            // $table->integer('tab21a50+2M')->nullable();
            // $table->integer('tab21a50+3M')->nullable();
            // $table->integer('tab21a50+4M')->nullable();

            // $table->integer('tab21a041F')->nullable();
            // $table->integer('tab21a042F')->nullable();
            // $table->integer('tab21a043F')->nullable();
            // $table->integer('tab21a044F')->nullable();

            // $table->integer('tab21a591F')->nullable();
            // $table->integer('tab21a592F')->nullable();
            // $table->integer('tab21a593F')->nullable();
            // $table->integer('tab21a594F')->nullable();

            // $table->integer('tab21a10141F')->nullable();
            // $table->integer('tab21a10142F')->nullable();
            // $table->integer('tab21a10143F')->nullable();
            // $table->integer('tab21a10144F')->nullable();

            // $table->integer('tab21a15191F')->nullable();
            // $table->integer('tab21a15192F')->nullable();
            // $table->integer('tab21a15193F')->nullable();
            // $table->integer('tab21a15194F')->nullable();

            // $table->integer('tab21a20241F')->nullable();
            // $table->integer('tab21a20242F')->nullable();
            // $table->integer('tab21a20243F')->nullable();
            // $table->integer('tab21a20244F')->nullable();

            // $table->integer('tab21a25491F')->nullable();
            // $table->integer('tab21a25492F')->nullable();
            // $table->integer('tab21a25493F')->nullable();
            // $table->integer('tab21a25494F')->nullable();

            // $table->integer('tab21a50+1F')->nullable();
            // $table->integer('tab21a50+2F')->nullable();
            // $table->integer('tab21a50+3F')->nullable();
            // $table->integer('tab21a50+4F')->nullable();

            // $table->integer('tab21a11FE')->nullable();
            // $table->integer('tab21a12FE')->nullable();
            // $table->integer('tab21a13FE')->nullable();
            // $table->integer('tab21a14FE')->nullable();

            // $table->integer('tab21a11FA')->nullable();
            // $table->integer('tab21a12FA')->nullable();
            // $table->integer('tab21a13FA')->nullable();
            // $table->integer('tab21a14FA')->nullable();

            // // tableau 21b
            // $table->integer('tab21benftstable')->nullable();
            // $table->integer('tab21benftssoinsdiff')->nullable();
            // $table->integer('tab21badultestable')->nullable();
            // $table->integer('tab21badultesoinsdiff')->nullable();

            // // tableau 22
            // $table->integer('tab22041M')->nullable();
            // $table->integer('tab22042M')->nullable();
            // $table->integer('tab22043M')->nullable();

            // $table->integer('tab22591M')->nullable();
            // $table->integer('tab22592M')->nullable();
            // $table->integer('tab22593M')->nullable();

            // $table->integer('tab2210141M')->nullable();
            // $table->integer('tab2210142M')->nullable();
            // $table->integer('tab2210143M')->nullable();

            // $table->integer('tab2215191M')->nullable();
            // $table->integer('tab2215192M')->nullable();
            // $table->integer('tab2215193M')->nullable();

            // $table->integer('tab2220241M')->nullable();
            // $table->integer('tab2220242M')->nullable();
            // $table->integer('tab2220243M')->nullable();

            // $table->integer('tab2225491M')->nullable();
            // $table->integer('tab2225492M')->nullable();
            // $table->integer('tab2225493M')->nullable();

            // $table->integer('tab2250+1M')->nullable();
            // $table->integer('tab2250+2M')->nullable();
            // $table->integer('tab2250+3M')->nullable();

            // $table->integer('tab22041F')->nullable();
            // $table->integer('tab22042F')->nullable();
            // $table->integer('tab22043F')->nullable();

            // $table->integer('tab22591F')->nullable();
            // $table->integer('tab22592F')->nullable();
            // $table->integer('tab22593F')->nullable();

            // $table->integer('tab2210141F')->nullable();
            // $table->integer('tab2210142F')->nullable();
            // $table->integer('tab2210143F')->nullable();

            // $table->integer('tab2215191F')->nullable();
            // $table->integer('tab2215192F')->nullable();
            // $table->integer('tab2215193F')->nullable();

            // $table->integer('tab2220241F')->nullable();
            // $table->integer('tab2220242F')->nullable();
            // $table->integer('tab2220243F')->nullable();

            // $table->integer('tab2225491F')->nullable();
            // $table->integer('tab2225492F')->nullable();
            // $table->integer('tab2225493F')->nullable();

            // $table->integer('tab2250+1F')->nullable();
            // $table->integer('tab2250+2F')->nullable();
            // $table->integer('tab2250+3F')->nullable();

            // $table->integer('tab2211FE')->nullable();
            // $table->integer('tab2212FE')->nullable();
            // $table->integer('tab2213FE')->nullable();

            // $table->integer('tab2211FA')->nullable();
            // $table->integer('tab2212FA')->nullable();
            // $table->integer('tab2213FA')->nullable();

            // // tableau 23
            // $table->integer('tab23041M')->nullable();
            // $table->integer('tab23042M')->nullable();
            // $table->integer('tab23043M')->nullable();
            // $table->integer('tab23044M')->nullable();
            // $table->integer('tab23045M')->nullable();

            // $table->integer('tab23591M')->nullable();
            // $table->integer('tab23592M')->nullable();
            // $table->integer('tab23593M')->nullable();
            // $table->integer('tab23594M')->nullable();
            // $table->integer('tab23595M')->nullable();

            // $table->integer('tab2310141M')->nullable();
            // $table->integer('tab2310142M')->nullable();
            // $table->integer('tab2310143M')->nullable();
            // $table->integer('tab2310144M')->nullable();
            // $table->integer('tab2310145M')->nullable();

            // $table->integer('tab2315191M')->nullable();
            // $table->integer('tab2315192M')->nullable();
            // $table->integer('tab2315193M')->nullable();
            // $table->integer('tab2315194M')->nullable();
            // $table->integer('tab2315195M')->nullable();

            // $table->integer('tab2320241M')->nullable();
            // $table->integer('tab2320242M')->nullable();
            // $table->integer('tab2320243M')->nullable();
            // $table->integer('tab2320244M')->nullable();
            // $table->integer('tab2320245M')->nullable();

            // $table->integer('tab2325491M')->nullable();
            // $table->integer('tab2325492M')->nullable();
            // $table->integer('tab2325493M')->nullable();
            // $table->integer('tab2325494M')->nullable();
            // $table->integer('tab2325495M')->nullable();

            // $table->integer('tab2350+1M')->nullable();
            // $table->integer('tab2350+2M')->nullable();
            // $table->integer('tab2350+3M')->nullable();
            // $table->integer('tab2350+4M')->nullable();
            // $table->integer('tab2350+5M')->nullable();

            // $table->integer('tab23041F')->nullable();
            // $table->integer('tab23042F')->nullable();
            // $table->integer('tab23043F')->nullable();
            // $table->integer('tab23044F')->nullable();
            // $table->integer('tab23045F')->nullable();

            // $table->integer('tab23591F')->nullable();
            // $table->integer('tab23592F')->nullable();
            // $table->integer('tab23593F')->nullable();
            // $table->integer('tab23594F')->nullable();
            // $table->integer('tab23595F')->nullable();

            // $table->integer('tab2310141F')->nullable();
            // $table->integer('tab2310142F')->nullable();
            // $table->integer('tab2310143F')->nullable();
            // $table->integer('tab2310144F')->nullable();
            // $table->integer('tab2310145F')->nullable();

            // $table->integer('tab2315191F')->nullable();
            // $table->integer('tab2315192F')->nullable();
            // $table->integer('tab2315193F')->nullable();
            // $table->integer('tab2315194F')->nullable();
            // $table->integer('tab2315195F')->nullable();

            // $table->integer('tab2320241F')->nullable();
            // $table->integer('tab2320242F')->nullable();
            // $table->integer('tab2320243F')->nullable();
            // $table->integer('tab2320244F')->nullable();
            // $table->integer('tab2320244F')->nullable();

            // $table->integer('tab2325491F')->nullable();
            // $table->integer('tab2325492F')->nullable();
            // $table->integer('tab2325493F')->nullable();
            // $table->integer('tab2325494F')->nullable();
            // $table->integer('tab2325494F')->nullable();

            // $table->integer('tab2350+1F')->nullable();
            // $table->integer('tab2350+2F')->nullable();
            // $table->integer('tab2350+3F')->nullable();
            // $table->integer('tab2350+4F')->nullable();
            // $table->integer('tab2350+5F')->nullable();

            // $table->integer('tab2311FE')->nullable();
            // $table->integer('tab2312FE')->nullable();
            // $table->integer('tab2313FE')->nullable();
            // $table->integer('tab2314FE')->nullable();
            // $table->integer('tab2315FE')->nullable();

            // $table->integer('tab2311FA')->nullable();
            // $table->integer('tab2312FA')->nullable();
            // $table->integer('tab2313FA')->nullable();
            // $table->integer('tab2314FA')->nullable();
            // $table->integer('tab2315FA')->nullable();

            // // tableau 24
            // $table->integer('tab24041M')->nullable();
            // $table->integer('tab24042M')->nullable();
            // $table->integer('tab24043M')->nullable();
            // $table->integer('tab24044M')->nullable();
            // $table->integer('tab24045M')->nullable();

            // $table->integer('tab24591M')->nullable();
            // $table->integer('tab24592M')->nullable();
            // $table->integer('tab24593M')->nullable();
            // $table->integer('tab24594M')->nullable();
            // $table->integer('tab24595M')->nullable();

            // $table->integer('tab2410141M')->nullable();
            // $table->integer('tab2410142M')->nullable();
            // $table->integer('tab2410143M')->nullable();
            // $table->integer('tab2410144M')->nullable();

            // $table->integer('tab2415191M')->nullable();
            // $table->integer('tab2415192M')->nullable();
            // $table->integer('tab2415193M')->nullable();
            // $table->integer('tab2415194M')->nullable();
            // $table->integer('tab2415195M')->nullable();

            // $table->integer('tab2420241M')->nullable();
            // $table->integer('tab2420242M')->nullable();
            // $table->integer('tab2420243M')->nullable();
            // $table->integer('tab2420244M')->nullable();
            // $table->integer('tab2420245M')->nullable();

            // $table->integer('tab2425491M')->nullable();
            // $table->integer('tab2425492M')->nullable();
            // $table->integer('tab2425493M')->nullable();
            // $table->integer('tab2425494M')->nullable();

            // $table->integer('tab2450+1M')->nullable();
            // $table->integer('tab2450+2M')->nullable();
            // $table->integer('tab2450+3M')->nullable();
            // $table->integer('tab2450+4M')->nullable();
            // $table->integer('tab2450+5M')->nullable();

            // $table->integer('tab24041F')->nullable();
            // $table->integer('tab24042F')->nullable();
            // $table->integer('tab24043F')->nullable();
            // $table->integer('tab24044F')->nullable();
            // $table->integer('tab24045F')->nullable();

            // $table->integer('tab24591F')->nullable();
            // $table->integer('tab24592F')->nullable();
            // $table->integer('tab24593F')->nullable();
            // $table->integer('tab24594F')->nullable();
            // $table->integer('tab24595F')->nullable();

            // $table->integer('tab2410141F')->nullable();
            // $table->integer('tab2410142F')->nullable();
            // $table->integer('tab2410143F')->nullable();
            // $table->integer('tab2410144F')->nullable();
            // $table->integer('tab2410145F')->nullable();

            // $table->integer('tab2415191F')->nullable();
            // $table->integer('tab2415192F')->nullable();
            // $table->integer('tab2415193F')->nullable();
            // $table->integer('tab2415194F')->nullable();
            // $table->integer('tab2415195F')->nullable();

            // $table->integer('tab2420241F')->nullable();
            // $table->integer('tab2420242F')->nullable();
            // $table->integer('tab2420243F')->nullable();
            // $table->integer('tab2420244F')->nullable();
            // $table->integer('tab2420245F')->nullable();

            // $table->integer('tab2425491F')->nullable();
            // $table->integer('tab2425492F')->nullable();
            // $table->integer('tab2425493F')->nullable();
            // $table->integer('tab2425494F')->nullable();
            // $table->integer('tab2425495F')->nullable();

            // $table->integer('tab2450+1F')->nullable();
            // $table->integer('tab2450+2F')->nullable();
            // $table->integer('tab2450+3F')->nullable();
            // $table->integer('tab2450+4F')->nullable();
            // $table->integer('tab2450+5F')->nullable();

            // $table->integer('tab2411FE')->nullable();
            // $table->integer('tab2412FE')->nullable();
            // $table->integer('tab2413FE')->nullable();
            // $table->integer('tab2414FE')->nullable();
            // $table->integer('tab2415FE')->nullable();

            // $table->integer('tab2411FA')->nullable();
            // $table->integer('tab2412FA')->nullable();
            // $table->integer('tab2413FA')->nullable();
            // $table->integer('tab2414FA')->nullable();
            // $table->integer('tab2415FA')->nullable();

            // // tableau 25
            // $table->integer('tab25aesproM')->nullable();
            // $table->integer('tab25aesproF')->nullable();
            // $table->integer('tab25aesviolM')->nullable();
            // $table->integer('tab25aesviolF')->nullable();
            // $table->integer('tab25aesruptureM')->nullable();
            // $table->integer('tab25aesruptureF')->nullable();
            // $table->integer('tab25aesautreM')->nullable();
            // $table->integer('tab25aesautreF')->nullable();
            // $table->integer('tab25nouveauprepM')->nullable();
            // $table->integer('tab25nouveauprepF')->nullable();

            // // tableau 26
            // $table->integer('tab26041M')->nullable();
            // $table->integer('tab26042M')->nullable();
            // $table->integer('tab26043M')->nullable();

            // $table->integer('tab26591M')->nullable();
            // $table->integer('tab26592M')->nullable();
            // $table->integer('tab26593M')->nullable();

            // $table->integer('tab2610141M')->nullable();
            // $table->integer('tab2610142M')->nullable();
            // $table->integer('tab2610143M')->nullable();

            // $table->integer('tab2615191M')->nullable();
            // $table->integer('tab2615192M')->nullable();
            // $table->integer('tab2615193M')->nullable();

            // $table->integer('tab2620241M')->nullable();
            // $table->integer('tab2620242M')->nullable();
            // $table->integer('tab2620243M')->nullable();

            // $table->integer('tab2625491M')->nullable();
            // $table->integer('tab2625492M')->nullable();
            // $table->integer('tab2625493M')->nullable();

            // $table->integer('tab2650+1M')->nullable();
            // $table->integer('tab2650+2M')->nullable();
            // $table->integer('tab2650+3M')->nullable();

            // $table->integer('tab26041F')->nullable();
            // $table->integer('tab26042F')->nullable();
            // $table->integer('tab26043F')->nullable();

            // $table->integer('tab26591F')->nullable();
            // $table->integer('tab26592F')->nullable();
            // $table->integer('tab26593F')->nullable();

            // $table->integer('tab2610141F')->nullable();
            // $table->integer('tab2610142F')->nullable();
            // $table->integer('tab2610143F')->nullable();

            // $table->integer('tab2615191F')->nullable();
            // $table->integer('tab2615192F')->nullable();
            // $table->integer('tab2615193F')->nullable();

            // $table->integer('tab2620241F')->nullable();
            // $table->integer('tab2620242F')->nullable();
            // $table->integer('tab2620243F')->nullable();

            // $table->integer('tab2625491F')->nullable();
            // $table->integer('tab2625492F')->nullable();
            // $table->integer('tab2625493F')->nullable();

            // $table->integer('tab2650+1F')->nullable();
            // $table->integer('tab2650+2F')->nullable();
            // $table->integer('tab2650+3F')->nullable();

            // $table->integer('tab2611FE')->nullable();
            // $table->integer('tab2612FE')->nullable();
            // $table->integer('tab2613FE')->nullable();

            // $table->integer('tab2611FA')->nullable();
            // $table->integer('tab2612FA')->nullable();
            // $table->integer('tab2613FA')->nullable();

            // // tableau 27
            // $table->integer('tab27enft11')->nullable();
            // $table->integer('tab27enft12')->nullable();
            // $table->integer('tab27enft13')->nullable();
            // $table->integer('tab27enft14')->nullable();
            // $table->integer('tab27enft15')->nullable();

            // $table->integer('tab27adlt21')->nullable();
            // $table->integer('tab27adlt22')->nullable();
            // $table->integer('tab27adlt23')->nullable();
            // $table->integer('tab27adlt24')->nullable();
            // $table->integer('tab27adlt25')->nullable();
            
            // tableau 28
            // $table->integer('tab28pfs')->nullable();
            // $table->integer('tab28pfp')->nullable();
            // $table->integer('tab28aens')->nullable();
            // $table->integer('tab28aenp')->nullable();
            // $table->integer('tab28sidas')->nullable();
            // $table->integer('tab28sidap')->nullable();
            // $table->integer('tab28buccos')->nullable();
            // $table->integer('tab28buccop')->nullable();
            // $table->integer('tab28palus')->nullable();
            // $table->integer('tab28palup')->nullable();
            // $table->integer('tab28cancers')->nullable();
            // $table->integer('tab28cancerp')->nullable();
            // $table->integer('tab28pcimes')->nullable();
            // $table->integer('tab28pcimep')->nullable();

            // // tableau 29
            // $table->integer('tab2911014')->nullable();
            // $table->integer('tab2911519')->nullable();
            // $table->integer('tab2912024')->nullable();
            // $table->integer('tab2912549')->nullable();
            // $table->integer('tab29150')->nullable();

            // $table->integer('tab2921014')->nullable();
            // $table->integer('tab2921519')->nullable();
            // $table->integer('tab2922024')->nullable();
            // $table->integer('tab2922549')->nullable();
            // $table->integer('tab29250')->nullable();

            // $table->integer('tab2931014')->nullable();
            // $table->integer('tab2931519')->nullable();
            // $table->integer('tab2932024')->nullable();
            // $table->integer('tab2932549')->nullable();
            // $table->integer('tab29350')->nullable();

            // $table->integer('tab2941014')->nullable();
            // $table->integer('tab2941519')->nullable();
            // $table->integer('tab29412024')->nullable();
            // $table->integer('tab29412549')->nullable();
            // $table->integer('tab294150')->nullable();

            // $table->integer('tab2951014')->nullable();
            // $table->integer('tab2951519')->nullable();
            // $table->integer('tab2952024')->nullable();
            // $table->integer('tab2952549')->nullable();
            // $table->integer('tab29550')->nullable();

            // $table->integer('tab2961014')->nullable();
            // $table->integer('tab2961519')->nullable();
            // $table->integer('tab2962024')->nullable();
            // $table->integer('tab2962549')->nullable();
            // $table->integer('tab29650')->nullable();

            // $table->integer('tab2971014')->nullable();
            // $table->integer('tab2971519')->nullable();
            // $table->integer('tab2972024')->nullable();
            // $table->integer('tab2972549')->nullable();
            // $table->integer('tab29750')->nullable();

            // // tableau 30a
            // $table->integer('tab30acocinf15')->nullable();
            // $table->integer('tab30acoc1519')->nullable();
            // $table->integer('tab30acoc2024')->nullable();
            // $table->integer('tab30acoc25+')->nullable();
            // $table->integer('tab30acocancienusers')->nullable();
            // $table->integer('tab30acoctotalusers')->nullable();
            // $table->integer('tab30acocprotege')->nullable();
            // $table->integer('tab30acocpdv')->nullable();
            // $table->integer('tab30acocabandon')->nullable();
            // $table->integer('tab30acocarret')->nullable();

            // $table->integer('tab30acopinf15')->nullable();
            // $table->integer('tab30acop1519')->nullable();
            // $table->integer('tab30acop2024')->nullable();
            // $table->integer('tab30acop25+')->nullable();
            // $table->integer('tab30acopancienusers')->nullable();
            // $table->integer('tab30acoptotalusers')->nullable();
            // $table->integer('tab30acopprotege')->nullable();
            // $table->integer('tab30acoppdv')->nullable();
            // $table->integer('tab30acopabandon')->nullable();
            // $table->integer('tab30acoparret')->nullable();

            // $table->integer('tab30aim3inf15')->nullable();
            // $table->integer('tab30aim31519')->nullable();
            // $table->integer('tab30aim32024')->nullable();
            // $table->integer('tab30aim325+')->nullable();
            // $table->integer('tab30aim3ancienusers')->nullable();
            // $table->integer('tab30aim3totalusers')->nullable();
            // $table->integer('tab30aim3protege')->nullable();
            // $table->integer('tab30aim3pdv')->nullable();
            // $table->integer('tab30aim3abandon')->nullable();
            // $table->integer('tab30aim3arret')->nullable();

            // $table->integer('tab30aim2inf15')->nullable();
            // $table->integer('tab30aim21519')->nullable();
            // $table->integer('tab30aim22024')->nullable();
            // $table->integer('tab30aim225+')->nullable();
            // $table->integer('tab30aim2ancienusers')->nullable();
            // $table->integer('tab30aim2totalusers')->nullable();
            // $table->integer('tab30aim2protege')->nullable();
            // $table->integer('tab30aim2pdv')->nullable();
            // $table->integer('tab30aim2abandon')->nullable();
            // $table->integer('tab30aim2arret')->nullable();

            // $table->integer('tab30asoucuitinf15')->nullable();
            // $table->integer('tab30asoucuit1519')->nullable();
            // $table->integer('tab30asoucuit2024')->nullable();
            // $table->integer('tab30asoucuit25+')->nullable();
            // $table->integer('tab30asoucuitancienusers')->nullable();
            // $table->integer('tab30asoucuittotalusers')->nullable();
            // $table->integer('tab30asoucuitprotege')->nullable();
            // $table->integer('tab30asoucuitpdv')->nullable();
            // $table->integer('tab30asoucuitabandon')->nullable();
            // $table->integer('tab30asoucuitarret')->nullable();

            // $table->integer('tab30aautoinjinf15')->nullable();
            // $table->integer('tab30aautoinj1519')->nullable();
            // $table->integer('tab30aautoinj2024')->nullable();
            // $table->integer('tab30aautoinj25+')->nullable();
            // $table->integer('tab30aautoinjancienusers')->nullable();
            // $table->integer('tab30aautoinjtotalusers')->nullable();
            // $table->integer('tab30aautoinjprotege')->nullable();
            // $table->integer('tab30aautoinjpdv')->nullable();
            // $table->integer('tab30aautoinjabandon')->nullable();
            // $table->integer('tab30aautoinjarret')->nullable();

            // $table->integer('tab30adiuinf15')->nullable();
            // $table->integer('tab30adiu1519')->nullable();
            // $table->integer('tab30adiu2024')->nullable();
            // $table->integer('tab30adiu25+')->nullable();
            // $table->integer('tab30adiuancienusers')->nullable();
            // $table->integer('tab30adiutotalusers')->nullable();
            // $table->integer('tab30adiuprotege')->nullable();
            // $table->integer('tab30adiupdv')->nullable();
            // $table->integer('tab30adiuabandon')->nullable();
            // $table->integer('tab30adiuarret')->nullable();

            // $table->integer('tab30adiuppinf15')->nullable();
            // $table->integer('tab30adiupp1519')->nullable();
            // $table->integer('tab30adiupp2024')->nullable();
            // $table->integer('tab30adiupp25+')->nullable();
            // $table->integer('tab30adiuppancienusers')->nullable();
            // $table->integer('tab30adiupptotalusers')->nullable();
            // $table->integer('tab30adiuppprotege')->nullable();
            // $table->integer('tab30adiupppdv')->nullable();
            // $table->integer('tab30adiuppabandon')->nullable();
            // $table->integer('tab30adiupparret')->nullable();

            // $table->integer('tab30a5ansinf15')->nullable();
            // $table->integer('tab30a5ans1519')->nullable();
            // $table->integer('tab30a5ans2024')->nullable();
            // $table->integer('tab30a5ans25+')->nullable();
            // $table->integer('tab30a5ansancienusers')->nullable();
            // $table->integer('tab30a5anstotalusers')->nullable();
            // $table->integer('tab30a5ansprotege')->nullable();
            // $table->integer('tab30a5anspdv')->nullable();
            // $table->integer('tab30a5ansabandon')->nullable();
            // $table->integer('tab30a5ansarret')->nullable();

            // $table->integer('tab30a3ansinf15')->nullable();
            // $table->integer('tab30a3ans1519')->nullable();
            // $table->integer('tab30a3ans2024')->nullable();
            // $table->integer('tab30a3ans25+')->nullable();
            // $table->integer('tab30a3ansancienusers')->nullable();
            // $table->integer('tab30a3anstotalusers')->nullable();
            // $table->integer('tab30a3ansprotege')->nullable();
            // $table->integer('tab30a3anspdv')->nullable();
            // $table->integer('tab30a3ansabandon')->nullable();
            // $table->integer('tab30a3ansarret')->nullable();

            // $table->integer('tab30acondomMinf15')->nullable();
            // $table->integer('tab30acondomM1519')->nullable();
            // $table->integer('tab30acondomM2024')->nullable();
            // $table->integer('tab30acondomM25+')->nullable();

            // $table->integer('tab30acondomFinf15')->nullable();
            // $table->integer('tab30acondomF1519')->nullable();
            // $table->integer('tab30acondomF2024')->nullable();
            // $table->integer('tab30acondomF25+')->nullable();

            // $table->integer('tab30asperminf15')->nullable();
            // $table->integer('tab30asperm1519')->nullable();
            // $table->integer('tab30asperm2024')->nullable();
            // $table->integer('tab30asperm25+')->nullable();

            // $table->integer('tab30aconraurginf15')->nullable();
            // $table->integer('tab30aconraurg1519')->nullable();
            // $table->integer('tab30aconraurg2024')->nullable();
            // $table->integer('tab30aconraurg25+')->nullable();

            // // tableau 30b 
            // $table->integer('tab30b1')->nullable();
            // $table->integer('tab30b2')->nullable();
            // $table->integer('tab30b3')->nullable();
            // $table->integer('tab30b4')->nullable();
            // $table->integer('tab30b5')->nullable();
            // $table->integer('tab30b6')->nullable();
            // $table->integer('tab30b7')->nullable();
            // $table->integer('tab30b8')->nullable();
            // $table->integer('tab30b9')->nullable();
            // $table->integer('tab30b10')->nullable();

            // // tableau 20c
            // $table->integer('tab30ccocsi')->nullable();
            // $table->integer('tab30ccocqterecu')->nullable();
            // $table->integer('tab30ccocdistribue')->nullable();
            // $table->integer('tab30ccocautresorti')->nullable();
            // $table->integer('tab30ccocenstock')->nullable();
            // $table->integer('tab30ccocjrsrupture')->nullable();

            // $table->integer('tab30ccopsi')->nullable();
            // $table->integer('tab30ccopqterecu')->nullable();
            // $table->integer('tab30ccopdistribue')->nullable();
            // $table->integer('tab30ccopautresorti')->nullable();
            // $table->integer('tab30ccopenstock')->nullable();
            // $table->integer('tab30ccopjrsrupture')->nullable();

            // $table->integer('tab30cim3si')->nullable();
            // $table->integer('tab30cim3qterecu')->nullable();
            // $table->integer('tab30cim3distribue')->nullable();
            // $table->integer('tab30cim3autresorti')->nullable();
            // $table->integer('tab30cim3enstock')->nullable();
            // $table->integer('tab30cim3jrsrupture')->nullable();

            // $table->integer('tab30cim2si')->nullable();
            // $table->integer('tab30cim2qterecu')->nullable();
            // $table->integer('tab30cim2distribue')->nullable();
            // $table->integer('tab30cim2autresorti')->nullable();
            // $table->integer('tab30cim2enstock')->nullable();
            // $table->integer('tab30cim2jrsrupture')->nullable();

            // $table->integer('tab30csoucutsi')->nullable();
            // $table->integer('tab30csoucutqterecu')->nullable();
            // $table->integer('tab30csoucutdistribue')->nullable();
            // $table->integer('tab30csoucutautresorti')->nullable();
            // $table->integer('tab30csoucutenstock')->nullable();
            // $table->integer('tab30csoucutjrsrupture')->nullable();

            // $table->integer('tab30cdiusi')->nullable();
            // $table->integer('tab30cdiuqterecu')->nullable();
            // $table->integer('tab30cdiudistribue')->nullable();
            // $table->integer('tab30cdiuautresorti')->nullable();
            // $table->integer('tab30cdiuenstock')->nullable();
            // $table->integer('tab30cdiujrsrupture')->nullable();

            // $table->integer('tab30cdiuppsi')->nullable();
            // $table->integer('tab30cdiuppqterecu')->nullable();
            // $table->integer('tab30cdiuppdistribue')->nullable();
            // $table->integer('tab30cdiuppautresorti')->nullable();
            // $table->integer('tab30cdiuppenstock')->nullable();
            // $table->integer('tab30cdiuppjrsrupture')->nullable();

            // $table->integer('tab30c5anssi')->nullable();
            // $table->integer('tab30c5ansqterecu')->nullable();
            // $table->integer('tab30c5ansdistribue')->nullable();
            // $table->integer('tab30c5ansautresorti')->nullable();
            // $table->integer('tab30c5ansenstock')->nullable();
            // $table->integer('tab30c5ansjrsrupture')->nullable();

            // $table->integer('tab30c3anssi')->nullable();
            // $table->integer('tab30c3ansqterecu')->nullable();
            // $table->integer('tab30c3ansdistribue')->nullable();
            // $table->integer('tab30c3ansautresorti')->nullable();
            // $table->integer('tab30c3ansenstock')->nullable();
            // $table->integer('tab30c3ansjrsrupture')->nullable();

            // $table->integer('tab30ccondomMsi')->nullable();
            // $table->integer('tab30ccondomMqterecu')->nullable();
            // $table->integer('tab30ccondomMdistribue')->nullable();
            // $table->integer('tab30ccondomMautresorti')->nullable();
            // $table->integer('tab30ccondomMenstock')->nullable();
            // $table->integer('tab30ccondomMjrsrupture')->nullable();

            // $table->integer('tab30ccondomFsi')->nullable();
            // $table->integer('tab30ccondomFqterecu')->nullable();
            // $table->integer('tab30ccondomFdistribue')->nullable();
            // $table->integer('tab30ccondomFautresorti')->nullable();
            // $table->integer('tab30ccondomFenstock')->nullable();
            // $table->integer('tab30ccondomFjrsrupture')->nullable();

            // $table->integer('tab30cspermsi')->nullable();
            // $table->integer('tab30cspermqterecu')->nullable();
            // $table->integer('tab30cspermdistribue')->nullable();
            // $table->integer('tab30cspermautresorti')->nullable();
            // $table->integer('tab30cspermenstock')->nullable();
            // $table->integer('tab30cspermjrsrupture')->nullable();

            // $table->integer('tab30ccontraurgsi')->nullable();
            // $table->integer('tab30ccontraurgqterecu')->nullable();
            // $table->integer('tab30ccontraurgdistribue')->nullable();
            // $table->integer('tab30ccontraurgautresorti')->nullable();
            // $table->integer('tab30ccontraurgenstock')->nullable();
            // $table->integer('tab30ccontraurgjrsrupture')->nullable();

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sevciformulaires');
    }
};
