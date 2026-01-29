@extends('admin.layouts.main')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* Fancy Light Theme Variables */
    :root {
        --phone-bg: #fdfdfd;
        --screen-text: #1d1d1f;
        --key-bg: #f2f2f7;
        --key-text: #1d1d1f;
        --key-active: #e5e5ea;
        --accent-green: #34c759;
        --delete-red: #ff3b30;
        --soft-shadow: 0 20px 60px rgba(0,0,0,0.1);
    }

    .phone-body {
        max-width: 380px;
        background: var(--phone-bg);
        margin: 50px auto;
        border-radius: 45px;
        padding: 40px 25px;
        box-shadow: var(--soft-shadow);
        border: 8px solid #ffffff; /* Bezel effect */
        position: relative;
    }

    /* Screen/Display Area */
    .screen {
        height: 120px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
    }

    #phoneNumber {
        background: transparent;
        border: none;
        color: var(--screen-text);
        font-size: 2.5rem;
        text-align: center;
        width: 100%;
        outline: none;
        font-weight: 400;
        letter-spacing: -1px;
    }

    #phoneNumber::placeholder {
        color: #aeaeb2;
        font-size: 1.5rem;
        font-weight: 300;
    }

    /* Keypad Grid */
    .keypad {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        justify-items: center;
    }

    .key {
        width: 80px;
        height: 80px;
        background: var(--key-bg);
        border: none;
        border-radius: 50%;
        color: var(--key-text);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
    }

    .key:active {
        background: var(--key-active);
        transform: scale(0.92);
    }

    .key .num {
        font-size: 2rem;
        font-weight: 400;
        line-height: 1;
        pointer-events: none;
    }

    .key .abc {
        font-size: 0.65rem;
        color: #8e8e93;
        font-weight: 600;
        letter-spacing: 1px;
        margin-top: 2px;
        pointer-events: none;
        text-transform: uppercase;
    }

    /* Bottom Action Row */
    .bottom-actions {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        align-items: center;
        margin-top: 40px;
        justify-items: center;
    }

    .call-btn {
        grid-column: 2;
        width: 80px;
        height: 80px;
        background: var(--accent-green);
        border-radius: 50%;
        border: none;
        color: white;
        font-size: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(52, 199, 89, 0.3);
        transition: transform 0.2s ease;
        cursor: pointer;
    }

    .call-btn:active {
        transform: scale(0.9);
        background: #2db34f;
    }

    .delete-btn {
        background: transparent;
        border: none;
        color: #aeaeb2;
        font-size: 1.6rem;
        cursor: pointer;
        transition: color 0.2s;
    }

    .delete-btn:hover {
        color: var(--delete-red);
    }
</style>

<div class="phone-body">
    <form action="{{ route('admin.dialer.call') }}" method="POST">
        @csrf
        <div class="screen">
            <input type="text" id="phoneNumber" name="phone_number"
                   autocomplete="off" autofocus
                   value="{{ $_GET['number'] ?? '' }}"
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
                    onmousedown="startZeroHold(event)"
                    onmouseup="endZeroHold(event)"
                    onmouseleave="endZeroHold(event)"
                    ontouchstart="startZeroHold(event)"
                    ontouchend="endZeroHold(event)">
                <span class="num">0</span>
                <span class="abc" style="color: var(--accent-green); font-size: 0.9rem;">+</span>
            </button>

            <button type="button" class="key" onclick="append('#')"><span class="num">#</span><span class="abc">&nbsp;</span></button>
        </div>

        <div class="bottom-actions">
            <div></div> <button type="submit" class="call-btn">
                <i class="fas fa-phone"></i>
            </button>
            <button type="button" class="delete-btn" onclick="backspace()">
                <i class="fas fa-backspace"></i>
            </button>
        </div>
    </form>
</div>

<script>
    /* Logic remains untouched per your request */
    const input = document.getElementById('phoneNumber');
    let holdTimer;
    let isLongPress = false;
    let isProcessing = false; 

    input.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            document.querySelector('.call-btn').click();
        }
    });

    function append(val) {
        input.value += val;
        input.focus();
    }

    function backspace() {
        input.value = input.value.slice(0, -1);
        input.focus();
    }

    function startZeroHold(e) {
        if (e.type === 'touchstart') e.preventDefault();
        isLongPress = false;
        isProcessing = true; 

        holdTimer = setTimeout(() => {
            isLongPress = true;
            input.value += '+';
            input.focus();
        }, 700); 
    }

    function endZeroHold(e) {
        if (!isProcessing) return;
        clearTimeout(holdTimer);
        if (!isLongPress) {
            append('0');
        }
        isProcessing = false;
        isLongPress = false;
    }
</script>
@endsection