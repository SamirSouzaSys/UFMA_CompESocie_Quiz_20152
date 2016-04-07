$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            carro: 2666,
            Bicicleta: null,
            itouch: 2647
        }, {
            period: '2010 Q2',
            carro: 2778,
            Bicicleta: 2294,
            itouch: 2441
        }, {
            period: '2010 Q3',
            carro: 4912,
            Bicicleta: 1969,
            itouch: 2501
        }, {
            period: '2010 Q4',
            carro: 3767,
            Bicicleta: 3597,
            itouch: 5689
        }, {
            period: '2011 Q1',
            carro: 6810,
            Bicicleta: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            carro: 5670,
            Bicicleta: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            carro: 4820,
            Bicicleta: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            carro: 15073,
            Bicicleta: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            carro: 10687,
            Bicicleta: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            carro: 8432,
            Bicicleta: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['carro', 'Bicicleta', 'itouch'],
        labels: ['carro', 'Bicicleta', 'Cabanãs'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

Morris.Donut({
    element: 'morris-donut-chart',
    data: [{
        label: "Download Sales",
        value: 12
    }, {
        label: "In-Store Sales",
        value: 30
    }, {
        label: "Mail-Order Sales",
        value: 20
    }],
    resize: true
});

Morris.Bar({
    element: 'morris-bar-chart',
    data: [{
        y: '2006',
        a: 100,
        b: 90
    }, {
        y: '2007',
        a: 75,
        b: 65
    }, {
        y: '2008',
        a: 50,
        b: 40
    }, {
        y: '2009',
        a: 75,
        b: 65
    }, {
        y: '2010',
        a: 50,
        b: 40
    }, {
        y: '2011',
        a: 75,
        b: 65
    }, {
        y: '2012',
        a: 100,
        b: 90
    }],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    hideHover: 'auto',
    resize: true
});

});
