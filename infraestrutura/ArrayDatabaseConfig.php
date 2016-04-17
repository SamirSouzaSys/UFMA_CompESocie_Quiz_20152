<?php

/**
 * UNA-SUS/UFMA - InfraEstrutura
 *
 * @author Samir Souza <samir.guitar@gmail.com>
 * @copyright (C) 2015, CTI UNA-SUS/UFMA
 * @version 1.1
 * @link http://www.unasus.ufma.br/jornadatcc/provab2015/
 */

/**
 * Arquivos de configuração do banco de dados
 */

class ArrayConfig {
    /**
     * Método que irá retornar as configurações de conexão com o banco de dados
     * Versão simplificada
     * @return Array
     */
    public static function obterDatabaseConfig($databaseConfig) {
        $databaseConfig['production_moodle_2.5']['hostname'] = '200.137.132.66'; //'bdsites.ufma.br';
        $databaseConfig['production_moodle_2.5']['username'] = 'siscti';
        $databaseConfig['production_moodle_2.5']['password'] = 's1sct1@';
        $databaseConfig['production_moodle_2.5']['database'] = 'moodle25';
        $databaseConfig['production_moodle_2.5']['dbdriver'] = '';
        $databaseConfig['production_moodle_2.5']['charset'] = '';
        $databaseConfig['production_moodle_2.5']['salt'] = 'ijmC@<P3VAWwCTSvxYVx;nZFy?';

        return $databaseConfig;
    }

}