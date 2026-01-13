@extends('admin.layouts.main')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    .phone-body {
        max-width: 360px;
        background: #1c1c1e;
        margin: 50px auto;
        border-radius: 50px;
        padding: 30px;
        box-shadow: 0 25px 50px rgba(0,0,0,0.4);
        border: 4px solid #3a3a3c;
    }

    /* Screen display - Now editable */
    .screen {
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    #phoneNumber {
        background: transparent;
        border: none;
        color: white;
        font-size: 2.2rem;
        text-align: center;
        width: 100%;
        outline: none;
        font-weight: 300;
        caret-color: #34c759; /* Green blinking cursor */
    }

    /* Keypad */
    .keypad {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        justify-items: center;
    }

    .key {
        width: 75px;
        height: 75px;
        background: #3a3a3c;
        border: none;
        border-radius: 50%;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        user-select: none; /* Prevents text selection while holding */
        transition: background 0.1s;
    }

    .key:active { background: #636366; }

    .key .num { font-size: 1.8rem; line-height: 1; pointer-events: none; }
    .key .abc { font-size: 0.6rem; color: #8e8e93; font-weight: bold; pointer-events: none; }

    .bottom-actions {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        align-items: center;
        margin-top: 30px;
        justify-items: center;
    }

    .call-btn {
        grid-column: 2;
        width: 75px;
        height: 75px;
        background: #34c759;
        border-radius: 50%;
        border: none;
        color: white;
        font-size: 1.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .delete-btn {
        background: none;
        border: none;
        color: #8e8e93;
        font-size: 1.5rem;
        cursor: pointer;
    }
</style>

<div class="phone-body">
    <form action="{{ route('admin.dialer.call') }}" method="POST">
        @csrf
        <div class="screen">
            <input type="text" id="phoneNumber" name="phone_number"
                   autocomplete="off" autofocus
                   placeholder="Enter number">
        </div>

        <div class="keypad">
            <button type="button" class="key" onclick="append('1')"><span class="num">1</span><span class="abc">&nbsp;</span></button>
            <button type="button" class="key" onclick="append('2')"><span class="num">2</span><span class="abc">ABC</span></button>
            <button type="button" class="key" onclick="append('3')"><span class="num">3</span><span class="abc">DEF</span></button>

            <button type="button" class="key" onclick="append('4')"><span class="num">4</span><span class="abc">GHI</span></button>
            <button type="button" class="key" onclick="append('5')"><span class="num">5</span><span class="abc">JKL</span></button>
            <button type="button" class="key" onclick="append('6')"><span class="num">6</span><span class="abc">MNO</span></button>

            <button type="button" class="key" onclick="append('7')"><span class="num">7</span><span class="abc">PQRS</span></button>
            <button type="button" class="key" onclick="append('8')"><span class="num">8</span><span class="abc">TUV</span></button>
            <button type="button" class="key" onclick="append('9')"><span class="num">9</span><span class="abc">WXYZ</span></button>

            <button type="button" class="key" onclick="append('*')"><span class="num" style="margin-top:10px">*</span><span class="abc">&nbsp;</span></button>

            <button type="button" class="key"
                    id="zeroKey"
                    onmousedown="startZeroHold()"
                    onmouseup="endZeroHold()"
                    onmouseleave="endZeroHold()"
                    ontouchstart="startZeroHold()"
                    ontouchend="endZeroHold()">
                <span class="num">0</span>
                <span class="abc" style="font-size: 0.8rem; color: #34c759;">+</span>
            </button>

            <button type="button" class="key" onclick="append('#')"><span class="num">#</span><span class="abc">&nbsp;</span></button>
        </div>

        <div class="bottom-actions">
            <button type="submit" class="call-btn">
                <i class="fas fa-phone"></i>
            </button>
            <button type="button" class="delete-btn" onclick="backspace()">
                <i class="fas fa-backspace"></i>
            </button>
        </div>
    </form>
</div>

<script>
    const input = document.getElementById('phoneNumber');
    let holdTimer;
    let heldLongEnough = false;

    // 1. Keyboard Support: Allow typing but keep focus
    input.addEventListener('keydown', (e) => {
        // You can add logic here to restrict to numbers only if desired
        if (e.key === 'Enter') {
            e.preventDefault();
            document.querySelector('.call-btn').click();
        }
    });

    // 2. Button Support
    function append(val) {
        input.value += val;
        input.focus();
    }

    function backspace() {
        input.value = input.value.slice(0, -1);
        input.focus();
    }

    // 3. The "Plus" Logic (Fixed)
    function startZeroHold() {
        heldLongEnough = false;
        holdTimer = setTimeout(() => {
            heldLongEnough = true;
            input.value += '+';
            input.focus();
        }, 800); // Wait 800ms to trigger the +
    }

    function endZeroHold() {
        clearTimeout(holdTimer);
        // If they let go quickly, it's just a zero
        if (!heldLongEnough) {
            append('0');
        }
    }
</script>


@endsection
