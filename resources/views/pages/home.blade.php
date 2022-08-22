@section('title','Home')
@extends('site')

@section('content')

    @include('partials._home-hero')

    

    <section class="section_content scroll_to_1">
        <div class="shaped_background no_top no_bottom">
            <div class="center_content">
                <div class="wrapper_page_xs">
                    <div class="title_section type_arrow">
                        <div class="arrow icon">
                            <svg width="29.8" height="29.8" viewBox="0 0 29.8 29.8" color="color_yellow" aria-hidden="true">
                                <circle fill="#da3732" cx="14.9" cy="14.9" r="14.9"></circle>
                                <path fill="#FFF" d="M25.153 14.255l-.009-.009c-.01-.013-15.291-10.564-15.291-10.564a3.994 3.994 0 00-.783 4.079c.6 1.226 3.2 2.9 3.914 3.341 1.51 1.048 4.686 3.15 4.689 3.153.3.219.393.374.388.6a.959.959 0 01-.383.681s-3.137 2.079-4.634 3.116c-.612.377-3.351 2.114-3.974 3.379a3.985 3.985 0 00.771 4.062l.012.021S25.134 15.563 25.144 15.55l.013-.015a.958.958 0 00.383-.681c.007-.22-.09-.376-.387-.599z"></path>
                            </svg>
                        </div>
                        <div class="title_text">
                            <h2 class="color_bleu">Why {{ env('APP_NAME') }}</h2>
                        </div>
                    </div>
                    <div class="text_visuel_two_col">
                        <div class="cross_wrapper_extreme_left">
                            <div class="text_visuel align_top">
                                <div class="visuel">
                                    <div data-gatsby-image-wrapper="" class="gatsby-image-wrapper gatsby-image-wrapper-constrained" style="width: 100%;">
                                        <div style="max-width: 1201px; display: block;">
                                            <img alt="" role="presentation" aria-hidden="true" src="/image7.png" style="max-width: 100%; display: block; position: static;">
                                        </div>
                                    </div>
                                </div>
                                <div class="text_container">
                                    <div class="text_center">
                                        <div class="title_block">
                                            <svg width="29.8" height="29.8" viewBox="0 0 29.8 29.8" color="color_dark_bleu" aria-hidden="true">
                                                <circle fill="#da3732" cx="14.9" cy="14.9" r="14.9"></circle>
                                                <path fill="#FFF" d="M25.153 14.255l-.009-.009c-.01-.013-15.291-10.564-15.291-10.564a3.994 3.994 0 00-.783 4.079c.6 1.226 3.2 2.9 3.914 3.341 1.51 1.048 4.686 3.15 4.689 3.153.3.219.393.374.388.6a.959.959 0 01-.383.681s-3.137 2.079-4.634 3.116c-.612.377-3.351 2.114-3.974 3.379a3.985 3.985 0 00.771 4.062l.012.021S25.134 15.563 25.144 15.55l.013-.015a.958.958 0 00.383-.681c.007-.22-.09-.376-.387-.599z"></path>
                                            </svg>
                                            <h3 class="color_dark_bleu"><span>We are the leading supplier of stone aggregates </span></h3>
                                        </div>
                                        <div class="">
                                            <p>Supplying Quarry Dust, Aggregate stones, Building Sand, River Sand, Laterite and Black Soil</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text_visuel_two_col">
                        <div class="cross_wrapper_extreme_right">
                            <div class="text_visuel order_inverse align_top">
                                <div class="visuel">
                                    <div data-gatsby-image-wrapper="" class="gatsby-image-wrapper gatsby-image-wrapper-constrained" style="width: 100%;">
                                        <div style="max-width: 1200px; display: block;">
                                            <img alt="" role="presentation" aria-hidden="true" src="/image6.png" style="max-width: 100%; display: block; position: static;">
                                        </div>
                                        <img aria-hidden="true" data-placeholder-image="" decoding="async" src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAMEAf/EABYBAQEBAAAAAAAAAAAAAAAAAAIAAf/aAAwDAQACEAMQAAABrVPljiYD/8QAGhAAAgMBAQAAAAAAAAAAAAAAAQIAAxETIv/aAAgBAQABBQIrWii2sDpsz0U0z//EABcRAQEBAQAAAAAAAAAAAAAAAAEAAiH/2gAIAQMBAT8BMhcv/8QAFxEAAwEAAAAAAAAAAAAAAAAAAAECIv/aAAgBAgEBPwF0zR//xAAcEAACAgIDAAAAAAAAAAAAAAAAARExAiFBYYH/2gAIAQEABj8C2VHRpY+k8jc2Uj//xAAdEAEAAgICAwAAAAAAAAAAAAABACExQRFRYYGR/9oACAEBAAE/IVKq3eZsV9TYE6VwDl9o2Y+EQKU43P/aAAwDAQACAAMAAAAQFO//xAAXEQEAAwAAAAAAAAAAAAAAAAAAEUFR/9oACAEDAQE/EK5GX//EABgRAAIDAAAAAAAAAAAAAAAAAAABETFR/9oACAECAQE/EH6ZOj//xAAeEAEAAgEEAwAAAAAAAAAAAAABABEhMUFRYXGBsf/aAAgBAQABPxCoWMgy6Y18RZb72HuJd5bv4gBrGRdDzFE9xbSjSilDb25n/9k=" alt="" style="opacity: 0; transition: opacity 500ms linear; object-fit: cover;">
                                         
                                    </div>
                                </div>
                                <div class="text_container">
                                    <div class="text_center">
                                        <div class="title_block">
                                            <svg width="29.8" height="29.8" viewBox="0 0 29.8 29.8" color="color_dark_bleu" aria-hidden="true">
                                                <circle fill="#da3732" cx="14.9" cy="14.9" r="14.9"></circle>
                                                <path fill="#FFF" d="M25.153 14.255l-.009-.009c-.01-.013-15.291-10.564-15.291-10.564a3.994 3.994 0 00-.783 4.079c.6 1.226 3.2 2.9 3.914 3.341 1.51 1.048 4.686 3.15 4.689 3.153.3.219.393.374.388.6a.959.959 0 01-.383.681s-3.137 2.079-4.634 3.116c-.612.377-3.351 2.114-3.974 3.379a3.985 3.985 0 00.771 4.062l.012.021S25.134 15.563 25.144 15.55l.013-.015a.958.958 0 00.383-.681c.007-.22-.09-.376-.387-.599z"></path>
                                            </svg>
                                            <h3 class="color_dark_bleu"><span>We are able to Transport Mining Chemicals</span></h3>
                                        </div>
                                        <div class="">
                                            <p>The company also specializes in the transportation of Mining Chemicals</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </section>


    <section class="section_content key_numbers_component scroll_to_0 no_padding color_white" style="background-image: url('/image6.png');">
        <div class="wrapper_page_xs">
            <div class="title_section type_arrow">
                <div class="arrow icon">
                    <svg width="29.8" height="29.8" viewBox="0 0 29.8 29.8" color="color_yellow" aria-hidden="true">
                        <circle fill="#da3732" cx="14.9" cy="14.9" r="14.9"></circle>
                        <path fill="#FFF" d="M25.153 14.255l-.009-.009c-.01-.013-15.291-10.564-15.291-10.564a3.994 3.994 0 00-.783 4.079c.6 1.226 3.2 2.9 3.914 3.341 1.51 1.048 4.686 3.15 4.689 3.153.3.219.393.374.388.6a.959.959 0 01-.383.681s-3.137 2.079-4.634 3.116c-.612.377-3.351 2.114-3.974 3.379a3.985 3.985 0 00.771 4.062l.012.021S25.134 15.563 25.144 15.55l.013-.015a.958.958 0 00.383-.681c.007-.22-.09-.376-.387-.599z"></path>
                    </svg>
                </div>
                <div class="title_text">
                    <h2 class="color_white">Key figures ({{ date('Y') }})</h2>
                </div>
            </div>
        </div>
        <div class="wrapper_page">
            <ul class="numbers item_length_2">
                <li>
                    <p class="key_number"><span>254 Million</span></p>
                    <p>TONNES IN TOTAL OF MINERAL RESOURCES ESTIMATED OF GRANITE</p>   
                </li>
                <li>
                    <p class="key_number"><span>100 +</span></p>
                    <p>EMPLOYEES</p>
                </li>
            </ul>
        </div>
    </section>

@endsection
