<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>2k</title>
    <meta name="description" content="Simple Starter Description" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php wp_site_icon(); ?>

    <?php wp_head(); ?>
</head>

<body>
    <symbol style="display: none">
        <svg id="megaphone" viewBox="0 0 40 32">
            <path d="M39.498,0C39.221,0,39,0.224,39,0.5v31c0,0.276,0.221,0.5,0.498,0.5s0.5-0.224,0.5-0.5v-31
                C39.998,0.224,39.774,0,39.498,0z" />
            <path d="M37.717,1.204c-0.17-0.083-0.376-0.062-0.526,0.055l-0.565,0.445C33.648,4.059,28.667,8,18.5,8H4.631
                C3.18,8,2,9.2,2,10.674v10.714C2,22.828,3.18,24,4.631,24h3.394c0.088,1.125,0.502,3.794,2.454,5.761
                C11.953,31.247,13.979,32,16.5,32c0.276,0,0.5-0.224,0.5-0.5S16.776,31,16.5,31c-2.242,0-4.026-0.652-5.306-1.938
                C9.527,27.386,9.127,25.038,9.031,24h2.995c0.085,0.682,0.36,1.881,1.274,2.802C14.089,27.597,15.166,28,16.5,28
                c0.276,0,0.5-0.224,0.5-0.5S16.776,27,16.5,27c-1.055,0-1.891-0.302-2.484-0.896c-0.657-0.659-0.894-1.546-0.981-2.104h5.396
                c10.216,0,15.237,3.963,18.237,6.331l0.522,0.411c0.089,0.07,0.198,0.105,0.307,0.105c0.075,0,0.15-0.017,0.219-0.051
                c0.172-0.084,0.281-0.258,0.281-0.449V1.653C37.998,1.462,37.889,1.288,37.717,1.204z M3,21.388V10.674C3,9.751,3.731,9,4.631,9H8
                v14H4.631C3.716,23,3,22.292,3,21.388z M37,29.317C33.866,26.851,28.672,23,18.432,23h-5.797c-0.047-0.015-0.095-0.03-0.148-0.031
                c-0.001,0-0.001,0-0.002,0c-0.054,0-0.105,0.015-0.154,0.031H9V9h9.5C28.737,9,33.894,5.136,37,2.684V29.317z" />
            <path d="M0.5,21.857c0.276,0,0.5-0.224,0.5-0.5V10.643c0-0.276-0.224-0.5-0.5-0.5S0,10.366,0,10.643v10.714
                C0,21.633,0.224,21.857,0.5,21.857z" />
        </svg>

        <svg id="atom" viewBox="0 0 30 32">
            <path d="M0.567,24c0.785,1.36,2.548,2.079,5.097,2.079c0,0,0,0,0.001,0c1.146,0,2.407-0.161,3.722-0.438
                C10.653,29.52,12.674,32,15,32s4.347-2.48,5.613-6.359c1.316,0.276,2.577,0.438,3.723,0.438c0,0,0,0,0,0
                c2.548,0,4.311-0.719,5.096-2.079c1.016-1.761,0.117-4.72-2.966-8c3.083-3.28,3.982-6.239,2.966-8
                c-0.785-1.36-2.548-2.079-5.097-2.079c-1.146,0-2.408,0.161-3.723,0.438C19.347,2.48,17.326,0,15,0s-4.347,2.48-5.613,6.359
                C8.071,6.082,6.809,5.921,5.664,5.921C3.115,5.921,1.352,6.64,0.567,8c-1.016,1.761-0.117,4.72,2.966,8
                C0.45,19.28-0.45,22.239,0.567,24z M15,31c-1.839,0-3.516-2.199-4.627-5.579c1.503-0.381,3.066-0.92,4.627-1.599
                c1.561,0.679,3.124,1.218,4.627,1.599C18.516,28.801,16.839,31,15,31z M9,16c0-1.164,0.062-2.297,0.168-3.393
                c0.893-0.622,1.837-1.228,2.832-1.803c0.984-0.568,1.991-1.077,3-1.533c1.009,0.455,2.016,0.964,3,1.533
                c0.995,0.574,1.938,1.18,2.832,1.803C20.938,13.703,21,14.836,21,16s-0.062,2.297-0.168,3.393
                c-0.893,0.622-1.837,1.228-2.832,1.803c-0.984,0.568-1.991,1.077-3,1.533c-1.009-0.455-2.016-0.964-3-1.533
                c-0.995-0.574-1.938-1.18-2.832-1.803C9.062,18.297,9,17.164,9,16z M8.098,18.623C6.952,17.762,5.914,16.878,5.012,16
                c0.902-0.878,1.94-1.762,3.086-2.623C8.039,14.231,8,15.102,8,16S8.039,17.769,8.098,18.623z M9.321,11.286
                c0.184-1.341,0.442-2.604,0.764-3.754c1.195,0.301,2.435,0.717,3.682,1.219C13.005,9.12,12.245,9.508,11.5,9.938
                C10.727,10.385,10.012,10.835,9.321,11.286z M16.232,8.751c1.247-0.502,2.487-0.918,3.682-1.219c0.322,1.15,0.58,2.413,0.764,3.754
                c-0.69-0.451-1.406-0.901-2.179-1.348C17.755,9.508,16.995,9.12,16.232,8.751z M21.902,13.377c1.147,0.861,2.184,1.744,3.086,2.623
                c-0.902,0.878-1.94,1.762-3.086,2.623C21.961,17.769,22,16.898,22,16S21.961,14.231,21.902,13.377z M20.679,20.714
                c-0.184,1.341-0.442,2.604-0.764,3.754c-1.195-0.301-2.435-0.717-3.682-1.219c0.763-0.368,1.523-0.757,2.268-1.187
                C19.273,21.615,19.988,21.165,20.679,20.714z M11.5,22.062c0.745,0.43,1.505,0.819,2.268,1.187
                c-1.247,0.502-2.487,0.918-3.682,1.219c-0.322-1.15-0.58-2.413-0.764-3.754C10.012,21.165,10.727,21.615,11.5,22.062z M28.567,23.5
                c-0.588,1.019-2.09,1.579-4.23,1.579c-1.056,0-2.218-0.146-3.432-0.395c0.396-1.424,0.693-3.008,0.877-4.708
                c1.546-1.084,2.851-2.168,3.94-3.229C28.254,19.429,29.448,21.973,28.567,23.5z M24.336,6.921c2.14,0,3.643,0.561,4.23,1.579
                c0.882,1.527-0.313,4.071-2.845,6.753c-1.089-1.06-2.394-2.145-3.94-3.229c-0.184-1.7-0.481-3.284-0.877-4.708
                C22.118,7.067,23.281,6.921,24.336,6.921z M15,1c1.839,0,3.516,2.199,4.627,5.579C18.124,6.96,16.561,7.499,15,8.178
                c-1.561-0.679-3.124-1.218-4.627-1.599C11.484,3.199,13.161,1,15,1z M1.433,8.5c0.588-1.019,2.09-1.579,4.23-1.579
                c1.056,0,2.218,0.146,3.432,0.395c-0.396,1.424-0.693,3.008-0.877,4.708c-1.546,1.084-2.851,2.168-3.94,3.229
                C1.746,12.571,0.552,10.027,1.433,8.5z M4.278,16.747c1.089,1.06,2.394,2.145,3.94,3.229c0.184,1.7,0.481,3.284,0.877,4.708
                c-1.213,0.249-2.375,0.395-3.431,0.395c0,0-0.001,0-0.001,0c-2.14,0-3.643-0.561-4.23-1.579
                C0.552,21.973,1.746,19.429,4.278,16.747z" />
            <path d="M15,18.5c1.378,0,2.5-1.121,2.5-2.5s-1.122-2.5-2.5-2.5s-2.5,1.121-2.5,2.5S13.622,18.5,15,18.5z M15,14.5
                c0.827,0,1.5,0.673,1.5,1.5s-0.673,1.5-1.5,1.5s-1.5-0.673-1.5-1.5S14.173,14.5,15,14.5z" />
        </svg>

        <svg id="happy" viewBox="0 0 32 32">
            <path d="M16-0.034C7.159-0.034-0.035,7.158-0.035,16S7.159,32.034,16,32.034S32.035,24.842,32.035,16
                S24.841-0.034,16-0.034z M16,30.966C7.748,30.966,1.035,24.252,1.035,16S7.748,1.034,16,1.034S30.965,7.748,30.965,16
                S24.252,30.966,16,30.966z" />
            <path d="M10.5,16.5c1.103,0,2-0.897,2-2s-0.897-2-2-2s-2,0.897-2,2S9.397,16.5,10.5,16.5z M10.5,13.5
                c0.551,0,1,0.448,1,1s-0.449,1-1,1s-1-0.448-1-1S9.949,13.5,10.5,13.5z" />
            <path d="M21.5,16.5c1.103,0,2-0.897,2-2s-0.897-2-2-2s-2,0.897-2,2S20.397,16.5,21.5,16.5z M21.5,13.5
                c0.551,0,1,0.448,1,1s-0.449,1-1,1s-1-0.448-1-1S20.949,13.5,21.5,13.5z" />
            <path d="M22.823,22.075c-1.696,1.837-4.097,2.891-6.588,2.891c-2.53,0-4.956-1.081-6.656-2.967
                c-0.198-0.218-0.537-0.237-0.755-0.038c-0.219,0.197-0.237,0.535-0.039,0.755c1.903,2.109,4.618,3.318,7.45,3.318
                c2.788,0,5.476-1.179,7.373-3.234c0.2-0.217,0.187-0.555-0.03-0.755S23.023,21.857,22.823,22.075z" />
        </svg>

        <svg id="strategy" viewBox="0 0 23 32">
            <path d="M22,31.5c0-0.276-0.224-0.5-0.5-0.5h-18C3.224,31,3,31.224,3,31.5S3.224,32,3.5,32h18
                C21.776,32,22,31.776,22,31.5z" />
            <path d="M1.274,9.354c-0.418,0.278-1.052,1.124-0.451,2.326c0.499,0.997,1.54,2.217,2.647,2.539
                c0.564,0.166,1.12,0.097,1.605-0.196c1.099-0.658,2.397-1.548,2.947-1.93c0.694,0.351,1.57,0.424,2.46,0.195
                c0.004-0.001,0.008-0.003,0.012-0.004c-0.052,1.651-0.611,2.682-3.344,5.22c-2.436,2.261-3.881,5.231-3.867,7.946
                c0.01,1.781,0.659,3.31,1.88,4.419C5.256,29.954,5.376,30,5.5,30h14c0.276,0,0.5-0.224,0.5-0.5S19.776,29,19.5,29H5.699
                c-0.919-0.905-1.407-2.13-1.415-3.555c-0.013-2.402,1.347-5.165,3.547-7.208C10.746,15.531,11.5,14.249,11.5,12
                c0-0.041-0.014-0.077-0.023-0.115c0.547-0.295,1.02-0.685,1.343-1.157c0.405-0.59,1.277-2.105,0.63-3.446
                c-0.12-0.247-0.419-0.352-0.668-0.232c-0.248,0.12-0.353,0.419-0.232,0.668c0.291,0.603,0.084,1.517-0.554,2.445
                c-0.368,0.536-1.026,0.969-1.761,1.157c-0.747,0.191-1.457,0.107-1.952-0.232c-0.173-0.118-0.4-0.117-0.571,0.004
                c-0.018,0.012-1.777,1.251-3.149,2.074c-0.251,0.15-0.516,0.182-0.812,0.094c-0.774-0.226-1.625-1.212-2.032-2.026
                c-0.329-0.658,0.008-0.972,0.161-1.084c3.447-2.977,5.177-6.07,5.248-6.201C7.194,3.827,7.208,3.683,7.164,3.55
                c-0.005-0.015-0.35-1.063-0.54-2.033c1.046,0.63,2.845,1.51,4.718,1.51c2.604,0,8.658,0.972,8.658,9.976
                c0,0.049-0.009,4.944-1.97,10.327c-0.095,0.259,0.039,0.546,0.299,0.641C18.386,23.99,18.443,24,18.5,24
                c0.204,0,0.396-0.126,0.47-0.329C20.991,18.123,21.001,13.205,21,13c0-10.183-7.393-10.974-9.658-10.974
                c-2.509,0-5.012-1.903-5.036-1.923C6.153-0.012,5.951-0.031,5.779,0.052C5.608,0.136,5.5,0.31,5.5,0.5
                c0,0.981,0.465,2.568,0.646,3.147C5.728,4.345,4.08,6.928,1.274,9.354z" />
            <path d="M17.485,1.54C15.884,0.461,14.094,0,11.5,0C11.224,0,11,0.224,11,0.5S11.224,1,11.5,1
                c2.38,0,4.003,0.409,5.427,1.369C19.241,3.931,22,7.043,22,13c0,1.451,0,3.438-0.985,7.379c-0.066,0.268,0.096,0.539,0.364,0.606
                C21.42,20.995,21.46,21,21.5,21c0.225,0,0.429-0.151,0.485-0.379C23,16.562,23,14.503,23,13C23,6.604,20.001,3.237,17.485,1.54z" />
        </svg>

        <svg id="presentation" viewBox="0 0 31 32">
            <path d="M0.5,3C0.224,3,0,3.224,0,3.5v17C0,21.327,0.673,22,1.5,22h28c0.827,0,1.5-0.673,1.5-1.5v-17
                C31,3.224,30.776,3,30.5,3S30,3.224,30,3.5v17c0,0.276-0.224,0.5-0.5,0.5h-28C1.224,21,1,20.776,1,20.5v-17C1,3.224,0.776,3,0.5,3z
                " />
            <path d="M32.5,0h-34C-1.776,0-2,0.224-2,0.5S-1.776,1-1.5,1h34C32.776,1,33,0.776,33,0.5S32.776,0,32.5,0z" />
            <path d="M11.854,8.146c-0.183-0.183-0.475-0.196-0.674-0.031l-6,5c-0.212,0.177-0.241,0.492-0.064,0.705
                c0.177,0.212,0.491,0.241,0.705,0.064l5.649-4.708l5.677,5.677C17.244,14.951,17.372,15,17.5,15s0.256-0.049,0.354-0.146L25,7.707
                V11.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-5c0-0.065-0.013-0.13-0.038-0.191c-0.051-0.122-0.148-0.22-0.271-0.271
                C25.63,6.013,25.565,6,25.5,6h-5C20.224,6,20,6.224,20,6.5S20.224,7,20.5,7h3.793L17.5,13.793L11.854,8.146z" />
            <path d="M8.057,31.732c0.128,0.245,0.43,0.339,0.675,0.211l6.768-3.545l6.768,3.545
                C22.342,31.982,22.421,32,22.5,32c0.18,0,0.354-0.098,0.443-0.268c0.128-0.245,0.034-0.547-0.211-0.675l-6.893-3.61
                C15.937,27.356,16,27.228,16,27.083V24.5c0-0.276-0.224-0.5-0.5-0.5S15,24.224,15,24.5v2.583c0,0.144,0.063,0.272,0.161,0.363
                l-6.893,3.61C8.023,31.185,7.929,31.487,8.057,31.732z" />
        </svg>

        <svg id="graph" viewBox="0 0 42 32">
            <path d="M39,0c-1.654,0-3,1.346-3,3c0,0.888,0.396,1.679,1.011,2.229L28.211,19.26C27.84,19.095,27.431,19,27,19
                c-0.868,0-1.644,0.376-2.193,0.967l-9.073-5.745C15.902,13.848,16,13.436,16,13c0-1.654-1.346-3-3-3s-3,1.346-3,3
                c0,0.904,0.41,1.706,1.044,2.256L4.149,26.231C3.795,26.083,3.407,26,3,26c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3
                c0-0.888-0.395-1.678-1.01-2.228l6.904-10.99C12.237,15.92,12.609,16,13,16c0.859,0,1.629-0.367,2.176-0.947l9.078,5.748
                C24.093,21.169,24,21.573,24,22c0,1.654,1.346,3,3,3s3-1.346,3-3c0-0.863-0.371-1.636-0.957-2.184l8.81-14.046
                C38.207,5.917,38.594,6,39,6c1.654,0,3-1.346,3-3S40.654,0,39,0z M5,29c0,1.103-0.897,2-2,2s-2-0.897-2-2s0.897-2,2-2
                S5,27.897,5,29z M13,15c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2S14.103,15,13,15z M27,24c-1.103,0-2-0.897-2-2s0.897-2,2-2
                s2,0.897,2,2S28.103,24,27,24z M39,5c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2S40.103,5,39,5z" />
        </svg>

        <svg id="time" viewBox="0 0 21 32">
            <path d="M21.021,0.5c0-0.276-0.224-0.5-0.5-0.5H0.479c-0.276,0-0.5,0.224-0.5,0.5S0.202,1,0.479,1h20.043
                C20.798,1,21.021,0.776,21.021,0.5z" />
            <path d="M20,6.112V2.5C20,2.224,19.776,2,19.5,2H1.582c-0.276,0-0.5,0.224-0.5,0.5v3.612
                c0,4.976,3.808,8.35,6.014,9.886C4.567,17.74,1,21.055,1,25.888V29.5C1,29.776,1.224,30,1.5,30h18c0.276,0,0.5-0.224,0.5-0.5
                v-3.583c0-4.962-3.863-8.365-6.095-9.916C16.434,14.259,20,10.945,20,6.112z M10.5,24.19L15.31,29H5.69L10.5,24.19z M12.732,15.578
                C12.587,15.669,12.5,15.829,12.5,16s0.087,0.331,0.232,0.422C14.617,17.617,19,20.935,19,25.917V29h-2.288
                c-0.009-0.011-0.013-0.025-0.023-0.035L11,23.276V22.5c0-0.276-0.224-0.5-0.5-0.5S10,22.224,10,22.5v0.776l-5.689,5.689
                c-0.01,0.01-0.014,0.024-0.023,0.035H2v-3.112c0-4.777,3.927-7.981,6.268-9.465C8.413,16.331,8.5,16.171,8.5,16
                s-0.087-0.331-0.232-0.422C6.408,14.398,2,11.115,2,6.112V3h17v3.112C19,10.89,15.073,14.093,12.732,15.578z" />
            <path d="M15.541,8.972H5.727c-0.179,0-0.345,0.096-0.434,0.251C5.204,9.379,5.205,9.57,5.295,9.725
                c1.187,2.021,2.92,3.258,4.755,4.569l0.159,0.113c0.087,0.062,0.188,0.093,0.291,0.093s0.204-0.031,0.291-0.093
                c0.262-0.187,0.526-0.371,0.79-0.555c1.639-1.144,3.334-2.326,4.391-4.127c0.091-0.154,0.092-0.346,0.003-0.501
                C15.885,9.068,15.72,8.972,15.541,8.972z M11.008,13.031c-0.169,0.118-0.338,0.236-0.507,0.355
                c-1.505-1.075-2.835-2.042-3.846-3.415h7.943C13.657,11.183,12.364,12.085,11.008,13.031z" />
            <path d="M0.479,32h20.043c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5H0.479c-0.276,0-0.5,0.224-0.5,0.5
                S0.202,32,0.479,32z" />
            <path d="M10.5,19c-0.276,0-0.5,0.224-0.5,0.5v1c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-1
                C11,19.224,10.776,19,10.5,19z" />
            <path d="M10.5,16c-0.276,0-0.5,0.224-0.5,0.5v1c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-1
                C11,16.224,10.776,16,10.5,16z" />
        </svg>

        <svg id="equalizer" viewBox="0 0 33 32">
            <path d="M31,0H2C1.178,0,0,1.178,0,2v28c0,0.822,1.178,2,2,2h29c0.822,0,2-1.178,2-2V2C33,1.178,31.822,0,31,0z
                M32,30c-0.006,0.284-0.716,0.994-1,1H2c-0.284-0.006-0.994-0.716-1-1V2c0.006-0.284,0.716-0.994,1-1h29
               c0.284,0.006,0.994,0.716,1,1V30z" />
            <path d="M16.5,5.5c-1.103,0-2,0.897-2,2s0.897,2,2,2s2-0.897,2-2S17.603,5.5,16.5,5.5z M16.5,8.5
               c-0.551,0-1-0.449-1-1s0.449-1,1-1s1,0.449,1,1S17.051,8.5,16.5,8.5z" />
            <path d="M24.5,21.5c-1.103,0-2,0.897-2,2s0.897,2,2,2s2-0.897,2-2S25.603,21.5,24.5,21.5z M24.5,24.5
               c-0.551,0-1-0.449-1-1s0.449-1,1-1s1,0.449,1,1S25.051,24.5,24.5,24.5z" />
            <path d="M8.5,16.5c-1.103,0-2,0.897-2,2s0.897,2,2,2s2-0.897,2-2S9.603,16.5,8.5,16.5z M8.5,19.5
               c-0.551,0-1-0.449-1-1s0.449-1,1-1s1,0.449,1,1S9.051,19.5,8.5,19.5z" />
            <path d="M8.5,15C8.776,15,9,14.776,9,14.5v-9C9,5.224,8.776,5,8.5,5S8,5.224,8,5.5v9C8,14.776,8.224,15,8.5,15z" />
            <path d="M8.5,22C8.224,22,8,22.224,8,22.5v3C8,25.776,8.224,26,8.5,26S9,25.776,9,25.5v-3C9,22.224,8.776,22,8.5,22
               z" />
            <path d="M16.5,11c-0.276,0-0.5,0.224-0.5,0.5v14c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-14
               C17,11.224,16.776,11,16.5,11z" />
            <path d="M24.5,20c0.276,0,0.5-0.224,0.5-0.5v-14C25,5.224,24.776,5,24.5,5S24,5.224,24,5.5v14
               C24,19.776,24.224,20,24.5,20z" />
        </svg>
    </symbol>

    <div class="wrapper">
        <header id="header" class="header">
            <div class="container">
                <div class="header__logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="
                        <?php
                        $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                        echo $custom_logo__url[0];
                        ?>" alt="Логотип компании" />
                    </a>
                </div>

                <nav id="nav" class="nav">
                    <?php
                    wp_nav_menu([
                        'theme_location'  => '',
                        'menu'            => 'main',
                        'container'       => false,
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 3
                    ]);
                    ?>

                    <!-- <ul>
                        <li class="has-child">
                            <a href="services.html">Услуги</a>
                            <ul>
                                <li>
                                    <a href="#"> Контекстная реклама </a>
                                </li>
                                <li class="has-child">
                                    <a href="#"> SEO продвижение </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Продвижение в Яндекс
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Продвижение в Google
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Комплексное продвижение
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Таргетинговая реклама</a>
                                </li>
                                <li class="has-child">
                                    <a href="#">SEO аудит</a>
                                    <ul>
                                        <li>
                                            <a href="#">Технический аудит</a>
                                        </li>
                                        <li>
                                            <a href="#">Юзабилити Аудит</a>
                                        </li>
                                        <li>
                                            <a href="#">Анализ конкурентов</a>
                                        </li>
                                        <li>
                                            <a href="#">Анализ контента</a>
                                        </li>
                                        <li>
                                            <a href="#">Комплексный аудит сайта</a>
                                        </li>
                                        <li>
                                            <a href="#">Маркетинговый аудит</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">SEO оптимизация сайта </a>
                                </li>
                                <li class="has-child">
                                    <a href="#">Разработка сайтов </a>
                                    <ul>
                                        <li>
                                            <a href="#">WordPress </a>
                                        </li>
                                        <li>
                                            <a href="#">1С-Битрикс </a>
                                        </li>
                                        <li>
                                            <a href="#">Tilda</a>
                                        </li>
                                        <li>
                                            <a href="#">Laravel </a>
                                        </li>
                                        <li>
                                            <a href="#">Joomla </a>
                                        </li>
                                        <li>
                                            <a href="#">MODx </a>
                                        </li>
                                        <li>
                                            <a href="#">Сопровождение сайта / тех.
                                                поддержка сайта
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Обновление сайта
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Наполнение сайта контентом
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Региональное продвижение</a>
                                </li>
                                <li>
                                    <a href="#">Разовые услуги</a>
                                </li>
                                <li class="has-child">
                                    <a href="#">Дополнительные услуги</a>
                                    <ul>
                                        <li>
                                            <a href="#">Создание логотипов</a>
                                        </li>
                                        <li>
                                            <a href="#">Фирменный стиль</a>
                                        </li>
                                        <li>
                                            <a href="#">Нейминг</a>
                                        </li>
                                        <li>
                                            <a href="#">Брендбук</a>
                                        </li>
                                        <li>
                                            <a href="#">Онлайн-консультант</a>
                                        </li>
                                        <li>
                                            <a href="#">Услуги хостинга</a>
                                        </li>
                                        <li>
                                            <a href="#">Реклама в метро</a>
                                        </li>
                                        <li>
                                            <a href="#">Комплексный интернет
                                                маркетинг</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#">О нас</a>
                            <ul>
                                <li>
                                    <a href="#">Наши работы</a>
                                </li>
                                <li>
                                    <a href="#">Условия сотрудничества</a>
                                </li>
                                <li>
                                    <a href="#">Коммерческое предложение</a>
                                </li>
                                <li>
                                    <a href="#">Отзывы</a>
                                </li>
                                <li>
                                    <a href="#">Реквизиты</a>
                                </li>
                                <li>
                                    <a href="#">Философия компании</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Кейсы</a>
                        </li>
                        <li class="has-child">
                            <a href="#">Продвижение сайтов</a>
                            <ul>
                                <li>
                                    <a href="#">Сайт-визитка</a>
                                </li>
                                <li>
                                    <a href="#">Корпоративные сайты</a>
                                </li>
                                <li>
                                    <a href="#">Промо-сайты</a>
                                </li>
                                <li>
                                    <a href="#">Имиджевый сайт</a>
                                </li>
                                <li>
                                    <a href="#">Online сервисы</a>
                                </li>
                                <li>
                                    <a href="#">Web-приложения</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Маркетплейсы</a>
                        </li>
                        <li>
                            <a href="contacts.html">Контакты</a>
                        </li>
                    </ul> -->
                </nav>

                <div class="header__contacts">
                    <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>" title="Получить консультацию">
                        <?php echo carbon_get_theme_option('site_phone'); ?>
                    </a>
                </div>

                <div class="header__burger">
                    <button id="header__burger-btn">&#9776;</button>
                </div>
            </div>
        </header>