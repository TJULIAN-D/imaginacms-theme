@extends('layouts.master')

@section('title')
    Error 500 | @parent
@stop

@section('content')
    <div id="page-error" class="py-5">
        <div class="container">
            <div class="row justify-content-center pb-lg-5">
                <div class="col-auto">
                    <i class="fa fa-exclamation-triangle icon py-4 pt-lg-5"></i>
                </div>
                <div class="col-lg-6 border-error text-center text-lg-left py-4">
                    <div id="error">
                        <h2 class="text-error d-sm-inline-block pr-sm-4">Error</h2>
                        <span>5</span> <span>0</span> <span>0</span>
                    </div>
                    <div id="message">{{trans('isite::common.viewErrors.message')}}</div>
                </div>
            </div>
            <div id="ops" class="row">
                <div class="col left"></div>
                <div class="col-auto center">...Ooops...</div>
                <div class="col right"></div>
            </div>
            <div class="d-flex justify-content-center">
                <div id="globe"><p>{{trans('isite::common.viewErrors.globe')}}</p></div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <style>
        #page-error {
            background-image: radial-gradient(ellipse at center, #ffffff 20%, #cdcdcd 80%);

            & .border-error {
                border-left: 1px solid #d8d8da;
            }

            & .icon {
                font-size:48px;
                color:#df1f26;
            }

            & #error {
                & .text-error {
                    color: #666666;
                    font-size: 70px;
                    font-weight: bold;
                }
                & span {
                    background-color: #EC0000;
                    color: #ffffff;
                    font-size: 70px;
                    font-weight: bold;
                    padding: 0 5px;
                }
            }

            & #message {
                font-size: 25px;
                color: #666666;
            }

            & #ops {
                & .left {
                    background-repeat: no-repeat;
                    background-size: contain;
                    background-position: center left;
                    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 471.88 116.15'%3E%3Cdefs%3E%3Cstyle%3E.cls-1,.cls-2%7Bfill:%23b3b3b3;%7D.cls-2%7Bfill-rule:evenodd;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cpath class='cls-1' d='M412.69,2.25h0C387.92,4.43,370.16,19.18,370,19.4,360.94,27,341.79,43.47,353.4,64c18.39,26,48.25,7.68,69.51,23.84,7.67,5.81,10.32,10.38,8.21,13.28-4.67,6.42-22.57,10.18-41.69,10.88-19.32.71-39.67-1.78-48.95-7.88-4.43-2.92-6-6.78-2.76-11.65,5.43-8.28,3.15-14.5-3.52-18.88-8.64-5.68-25.36-7.85-41.13-7.16s-31,4.36-36.29,10.32c-3.57,4-3.34,8.81,2.65,14.1,3.79,3.34,4.18,6.15,2.21,8.38-3.16,3.59-11,6.38-21,8.15a153.59,153.59,0,0,1-34.28,1.88c-17.14-.95-29.81-2.5-47.26-2.78-16.6,0-149.1.58-159.07.27v4.53c10.54.56,146.18-.55,156.87-.55,17.45.28,32.06,1.66,49.24,2.61a158.06,158.06,0,0,0,35.2-1.92c10.83-1.93,19.57-5.16,23.38-9.48,3.64-4.13,3.39-8.91-2.56-14.15-3.83-3.38-4.21-6.16-2.3-8.33,4.51-5.11,18.5-8.29,33.41-9S324.07,71.77,332,77c4.62,3,6.18,7.39,2.35,13.22-4.79,7.29-2.58,13,3.93,17.31,10,6.58,31.3,9.29,51.33,8.56,20.22-.74,39.39-5.07,44.85-12.57,3.57-4.91.33-12.46-9.05-18.93C398,65.85,379.92,88.72,357.71,63c-10.62-16.49,7.29-34.56,14-39.7,1.77-1.43,19.85-16.83,41.31-17h0c10.68-.83,21.32,2.59,30.29,9.42,1.09.83,2.17,1.71,3.22,2.66l2.72-3c-1.12-1-2.28-2-3.47-2.87C436,5.06,424.37,1.33,412.69,2.25Z'/%3E%3Cpath class='cls-1' d='M444.62,19.4c-8.13-7.28-18.08-11.48-28-11.84l.24-6.74c11.51.42,23,5.23,32.28,13.55Z'/%3E%3Cpath class='cls-2' d='M469.5,14.2,456.1,7.14h0L443.9.73a6.37,6.37,0,0,0-8.59,2.67l-5.54,10.51a6.39,6.39,0,0,0,2.67,8.6l8.69,4.57h0L458,36a4.45,4.45,0,1,0,4.14-7.87l-13.4-7.06L452,15l13.4,7a4.44,4.44,0,1,0,4.14-7.86Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                }
                & .center {
                    font-size: 40px;
                    color: #b2b3b6;
                    font-weight: bold;
                    padding-bottom: 6rem;
                    padding-top: 1rem;
                }
                & .right {
                    background-repeat: no-repeat;
                    background-size: contain;
                    background-position: center right;
                    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 496.01 142.2'%3E%3Cdefs%3E%3Cstyle%3E.cls-1,.cls-2%7Bfill:%23b3b3b3;%7D.cls-2%7Bfill-rule:evenodd;%7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cg%3E%3Cpath class='cls-1' d='M344.61,138c-12.4,0-33.54.33-47.75.35-12.95-.49-27.75-2.39-39.34-4-11.2-1.57-19.8-4.1-22.06-7.33-.88-1.24-.1-2.89,2.89-5,5.39-3.78,6.27-7.4,4-10.69-4-5.7-21-9.16-38.56-9.65-17.45-.49-35.81,1.85-42.92,7.72-4.35,3.59-5.14,8.18-.46,13.86,2.29,2.77,1.94,5-.23,6.82-7.15,5.9-29,8.42-50.08,8-20.83-.46-40.59-3.73-43.88-9.4-1.05-1.82.67-4.33,6.36-7.62a150.59,150.59,0,0,0,28.2-21.22c12.62-12.05,22.53-25.77,27.83-39,5.42-13.55,6.06-26.67,0-37.2A32.07,32.07,0,0,0,124,17.48,55.16,55.16,0,0,0,89,.25,56.84,56.84,0,0,0,50.9,10.51l2.37,3.33A52.74,52.74,0,0,1,88.66,4.32,51,51,0,0,1,121,20.3a28.19,28.19,0,0,1,4,5.29c5.42,9.34,4.75,21.22-.21,33.63-5.09,12.71-14.65,25.92-26.86,37.58a146.18,146.18,0,0,1-27.43,20.64c-8.18,4.74-10.17,9.2-7.85,13.2,4.06,7,25.27,11,47.34,11.44,21.85.48,44.82-2.34,52.75-8.89,4.14-3.41,4.9-7.59.8-12.56-2.85-3.45-2.52-6.13-.11-8.12,6.31-5.21,23.59-7.26,40.22-6.79S235.72,109,239,113.65c.85,1.21.08,2.85-3,5-5.34,3.75-6.23,7.36-3.89,10.69,3,4.23,12.6,7.31,24.85,9,11.86,1.67,27.07,3.88,40.13,3.77,15.73.22,34-.12,47.75-.33,6.67,0,145.5-.54,151.17-1V137.3C491.63,137.91,353.71,137.78,344.61,138Z'/%3E%3Cpath class='cls-1' d='M35.09,22.36,31.7,17.6A58.19,58.19,0,0,1,52.47,8.34L53.75,14A52.2,52.2,0,0,0,35.09,22.36Z'/%3E%3Cpath class='cls-2' d='M13.69,13.73l-8,4.49L4.35,19A8.52,8.52,0,0,0,1.07,30.51L8.8,44.36a8.53,8.53,0,0,0,11.57,3.28l5.78-3.23h0l3.56-2C49.7,30.87,33.81,2.5,13.69,13.73Zm-6.7,9,8.35-4.66c4.74-2.65,10,4.6,4.33,7.77l-8.34,4.65C5.7,33.65,1,26.09,7,22.75ZM27.33,39.58,19,44.24c-6.2,3.46-10.09-4.56-4.34-7.76L23,31.82A4.45,4.45,0,1,1,27.33,39.58Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                }
            }

            #globe {
                position: relative;
                height: 100px;
                width: 180px;
                background: #fdfdfa;
                border-radius: 50%;
                box-shadow: 1px 12px 33px rgba(0, 0, 0, 0.5);
                margin-top: -30px;
                margin-bottom: 3rem;

                & p {
                    text-align: center;
                    font-size: 22px;
                    line-height: 25px;
                    color: #a6a6a6;
                    padding: 25px 20px 0 20px;
                }
                &:before {
                    border: 20px solid #fdfdfa;
                    content: '';
                    border-left-color: transparent;
                    border-bottom-color: transparent;
                    border-right-color: transparent;
                    position: absolute;
                    bottom: -24px;
                    right: 12px;
                    transform: rotate(332deg);
                }
                &:after {
                    border-top: 6px dotted #bbbaba;
                    content: '';
                    position: absolute;
                    bottom: -36px;
                    right: -49px;
                    transform: rotate(215deg);
                    height: 99px;
                    width: 46px;
                }
            }

            @media (max-width: 991.98px) {
                & .border-error {
                    border-left: 0;
                    border-top: 1px solid #d8d8da;
                }
            }
            @media (max-width: 767.98px) {
                & #ops {
                    margin-bottom: 2rem;
                    & .center {
                        font-size: 20px;
                        padding-bottom: 3rem;
                        padding-top: 3rem;
                    }
                }
            }
        }
    </style>
@stop