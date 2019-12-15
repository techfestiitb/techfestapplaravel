<style>

    /* The Loader */
    #loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        overflow: hidden;
    }
    .no-js #loader-wrapper {
        display: none;
    }

    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 40%;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border-radius: 50%;
        z-index: 11;
    }



    #loader-wrapper .loader-section {
        position: fixed;
        top: 0;
        width: 51%;
        height: 100%;
        background: #222;
        z-index: 10;
    }

    #loader-wrapper .loader-section.section-left {
        left: 0;
    }

    #loader-wrapper .loader-section.section-right {
        right: 0;
    }

    /* Loaded styles */
    .loaded #loader-wrapper .loader-section.section-left {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .loaded #loader-wrapper .loader-section.section-right {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .loaded #loader {
        opacity: 0;
        transition: all 0.3s ease-out;
    }

    .loaded #loader-wrapper {
        visibility: hidden;
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
        transition: all 0.3s 1s ease-out;
    }

</style>

<style>
    .loader {
        position: fixed;
        width: 100%;
        height: 100%;
    }

    .spin {
        width: 150px;
        height: 150px;
        top: 25%;
        left: 50%;
        margin-left: -75px;
        border: 3px solid transparent;
        border-radius: 50%;
        border-top-color: #ffffff;
        position: absolute;
        animation: spin 1500ms infinite linear;
    }

    .spin:before {
        top: 3px;
        left: 3px;
        right: 3px;
        bottom: 3px;
        border: 3px solid transparent;
        border-top-color: #428BFF;
        animation: antispin 700ms infinite linear;
        content: "";
        position: absolute;
        border-radius: 60%;
    }

    @keyframes spin { 100% {transform:rotate(360deg);} }
    @keyframes antispin {
        from {transform: rotate}
        to {transform: rotate(-360deg);}
    }

    .loader svg {
        width: 112px;
        top: 25%;
        left: 50%;
        margin-top: 23px;
        margin-left: -56px;
        position: relative;
    }

</style>
<div id="loader-wrapper">
        <div class="loader" id="loader">
            <div class="spin"></div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80pt" height="80pt" viewBox="0 0 80 80" version="1.1">
                <g id="surface1">
                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(255,255,255);fill-opacity:1;" d="M 66.617188 18.945312 L 66.617188 19.382812 L 67.382812 19.382812 L 67.382812 21.5625 L 67.890625 21.5625 L 67.890625 19.382812 L 68.65625 19.382812 L 68.65625 18.945312 L 66.617188 18.945312 M 69.527344 18.945312 L 69.527344 21.5625 L 70.035156 21.5625 L 70 19.417969 C 70.230469 19.910156 70.394531 20.441406 70.589844 20.945312 C 70.652344 21.105469 70.703125 21.425781 70.851562 21.527344 C 70.964844 21.601562 71.175781 21.5625 71.308594 21.5625 C 71.433594 21.03125 71.695312 20.515625 71.878906 20 C 71.953125 19.796875 72.050781 19.597656 72.074219 19.382812 L 72.144531 19.382812 C 72.113281 20.105469 72.078125 20.839844 72.074219 21.5625 L 72.582031 21.5625 L 72.582031 18.945312 L 71.746094 18.945312 C 71.683594 19.21875 71.566406 19.480469 71.472656 19.746094 C 71.34375 20.121094 71.222656 20.511719 71.054688 20.871094 C 70.855469 20.425781 70.710938 19.949219 70.539062 19.492188 C 70.484375 19.34375 70.445312 19.074219 70.308594 18.984375 C 70.140625 18.867188 69.726562 18.945312 69.527344 18.945312 M 29.710938 21.796875 C 28.949219 21.914062 28.160156 22.054688 27.492188 22.453125 C 26.773438 22.878906 26.25 23.542969 25.78125 24.21875 C 25.214844 25.03125 24.738281 25.898438 24.257812 26.761719 C 23.699219 27.773438 22.972656 28.824219 22.882812 30 C 22.867188 30.210938 22.914062 30.449219 22.96875 30.65625 C 23.019531 30.847656 23.097656 31.027344 23.203125 31.199219 C 23.882812 32.296875 25.164062 32.410156 26.328125 32.4375 C 26.761719 32.449219 27.273438 32.503906 27.671875 32.6875 C 27.859375 32.773438 28.046875 32.9375 28.023438 33.164062 C 27.996094 33.402344 27.839844 33.644531 27.738281 33.855469 L 27.136719 35.054688 C 26.484375 36.359375 25.859375 37.679688 25.207031 38.980469 C 23.085938 43.230469 21.0625 47.53125 18.9375 51.78125 C 18.175781 53.304688 17.441406 54.839844 16.683594 56.363281 C 16.496094 56.738281 16.304688 57.105469 16.140625 57.492188 C 16.078125 57.640625 15.984375 57.835938 16.074219 57.996094 C 16.167969 58.167969 16.375 58.179688 16.546875 58.183594 C 16.933594 58.183594 17.320312 58.183594 17.710938 58.183594 L 21.128906 58.183594 C 21.691406 58.183594 22.3125 58.253906 22.871094 58.171875 C 23.5625 58.070312 23.722656 57.203125 23.933594 56.65625 C 24.542969 55.078125 25.160156 53.507812 25.761719 51.925781 C 27.691406 46.855469 29.699219 41.8125 31.601562 36.726562 C 31.996094 35.667969 32.414062 34.621094 32.816406 33.5625 C 33.214844 32.511719 33.59375 31.457031 33.28125 30.328125 C 33.097656 29.660156 32.636719 29.183594 31.964844 29.015625 C 31.71875 28.953125 31.484375 28.964844 31.238281 28.9375 C 30.421875 28.863281 29.582031 28.910156 28.761719 28.910156 L 27.816406 28.910156 C 27.660156 28.910156 27.484375 28.921875 27.347656 28.816406 C 27.054688 28.585938 27.367188 28.089844 27.46875 27.816406 C 27.695312 27.226562 27.960938 26.648438 28.128906 26.035156 C 28.253906 25.59375 28.3125 25.070312 28.660156 24.738281 C 29.144531 24.277344 29.96875 24.398438 30.582031 24.398438 L 35.273438 24.398438 C 40.265625 24.398438 45.257812 24.4375 50.253906 24.4375 L 55.417969 24.4375 C 55.609375 24.4375 55.824219 24.453125 56 24.359375 C 56.222656 24.234375 56.320312 23.96875 56.414062 23.746094 C 56.597656 23.324219 56.804688 22.90625 56.957031 22.472656 C 57.035156 22.253906 57.054688 21.96875 56.796875 21.859375 C 56.535156 21.75 56.207031 21.78125 55.925781 21.78125 L 36.035156 21.78125 C 34.605469 21.78125 33.171875 21.800781 31.746094 21.816406 C 31.386719 21.824219 31.015625 21.839844 30.65625 21.816406 C 30.34375 21.792969 30.023438 21.75 29.710938 21.796875 M 58.617188 22.09375 C 57.941406 22.246094 57.75 23.058594 57.480469 23.601562 C 56.953125 24.671875 56.480469 25.777344 55.996094 26.871094 C 55.792969 27.332031 55.605469 28.023438 55.199219 28.34375 C 54.929688 28.558594 54.582031 28.546875 54.253906 28.546875 L 47.089844 28.546875 C 46.09375 28.546875 45.078125 28.558594 44.292969 29.277344 C 44.144531 29.414062 44.019531 29.578125 43.910156 29.746094 C 43.597656 30.210938 43.4375 30.761719 43.222656 31.273438 C 42.75 32.394531 42.308594 33.53125 41.839844 34.65625 C 40.324219 38.265625 38.898438 41.910156 37.304688 45.492188 C 36.132812 48.125 34.792969 50.644531 32.804688 52.761719 C 32.167969 53.441406 31.496094 54.121094 30.726562 54.652344 C 29.972656 55.175781 29.148438 55.605469 28.21875 55.667969 C 27.640625 55.710938 27.050781 55.671875 26.472656 55.671875 C 26.1875 55.671875 25.875 55.640625 25.601562 55.730469 C 25.347656 55.816406 25.226562 56.0625 25.132812 56.289062 C 24.972656 56.691406 24.789062 57.082031 24.65625 57.492188 C 24.558594 57.777344 24.472656 58.089844 24.871094 58.136719 C 25.203125 58.179688 25.558594 58.144531 25.890625 58.144531 C 26.425781 58.144531 26.960938 58.164062 27.492188 58.117188 C 28.421875 58.027344 29.328125 57.921875 30.21875 57.597656 C 34.335938 56.089844 36.871094 52.101562 39.1875 48.617188 C 39.90625 47.539062 40.605469 46.445312 41.292969 45.34375 C 41.640625 44.789062 41.972656 44.0625 42.507812 43.671875 C 43.074219 43.257812 43.742188 43.308594 44.398438 43.308594 C 45.554688 43.308594 46.699219 43.34375 47.855469 43.34375 C 48.292969 43.34375 48.863281 43.4375 49.273438 43.257812 C 49.703125 43.070312 49.835938 42.507812 50 42.109375 C 50.300781 41.386719 50.632812 40.675781 50.957031 39.964844 C 51.128906 39.589844 51.363281 39.199219 51.460938 38.800781 C 51.515625 38.574219 51.359375 38.496094 51.164062 38.457031 C 50.8125 38.394531 50.429688 38.4375 50.074219 38.4375 L 45.710938 38.4375 C 45.550781 38.4375 45.375 38.429688 45.25 38.3125 C 44.988281 38.054688 45.273438 37.621094 45.371094 37.34375 C 45.566406 36.78125 45.792969 36.230469 46.007812 35.671875 C 46.148438 35.304688 46.273438 34.921875 46.472656 34.582031 C 46.691406 34.203125 46.96875 33.859375 47.308594 33.582031 C 48.125 32.910156 49.179688 32.871094 50.183594 32.871094 L 52.109375 32.871094 C 52.789062 32.871094 53.464844 32.875 54.144531 32.871094 C 54.378906 32.871094 54.601562 32.824219 54.835938 32.839844 C 55.152344 32.859375 55.46875 32.855469 55.78125 32.875 C 56.554688 32.929688 57.292969 33 58 32.601562 C 58.972656 32.058594 59.480469 30.96875 60.011719 30.035156 C 60.945312 28.394531 61.917969 26.769531 62.859375 25.128906 C 63.179688 24.5625 63.550781 24.007812 63.828125 23.417969 C 63.949219 23.152344 64.042969 22.78125 63.886719 22.507812 C 63.640625 22.074219 63.050781 22.074219 62.617188 22.074219 L 59.925781 22.074219 C 59.515625 22.074219 59.019531 22 58.617188 22.09375 Z M 58.617188 22.09375 "/>
                </g>
            </svg>
        </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Fakes the loading setting a timeout
        setTimeout(function() {
            $('body').addClass('loaded');
        }, 500);

    });
</script>