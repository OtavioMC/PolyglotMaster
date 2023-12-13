<?php
    namespace OtavioMC\PolyglotMaster;

    describe("translate", function(){

        it("Returns a non-empty string", function(){
            $response = PolyglotMaster::translate("ejemplo", "portugués" );
            expect( $response )->toBeA( "string" );
            expect( mb_strlen($response) )->toBeGreaterThan(0);

        });

        it("Returns a string that contains the translation of the text.", function(){
            $response = PolyglotMaster::translate("Trinta e três", "Inglês" );
            expect( strtolower($response) )->toContain( "thirty" );
        });

        it( "Throws a TranslateException when language is not valid", function(){
            
        } );
    });